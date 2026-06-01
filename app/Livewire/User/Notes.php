<?php

namespace App\Livewire\User;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Category;

class Notes extends Component
        {
            public $search = '';

            public $title;
            public $content;
            public $category_id;    

            public $showModal = false;

            public $editingId = null;

            public $showPinnedOnly = false;

            protected $rules = [
                'title' => 'required|min:3',
                'content' => 'required|min:3',
                'category_id' => 'nullable|exists:categories,id',
            ];

            // OPEN MODAL
            public function openModal()
            {
                $this->resetForm();

                $this->showModal = true;
            }

            // CLOSE MODAL
            public function closeModal()
            {
                $this->showModal = false;
            }

            // SAVE NOTE
            public function save()
            {
                $this->validate();

                if ($this->editingId) {

                    $note = Note::where('user_id', Auth::id())
                        ->findOrFail($this->editingId);

                    $note->update([
                        'title' => $this->title,
                        'content' => $this->content,
                        'category_id' => $this->category_id,
                    ]);

                } else {

                    Note::create([
                        'title' => $this->title,
                        'content' => $this->content,
                        'category_id' => $this->category_id,
                        'user_id' => Auth::id(),
                    ]);
                }

                $this->closeModal();

                $this->resetForm();
            }

            // EDIT NOTE
            public function edit($id)
            {
                $note = Note::where('user_id', Auth::id() )->findOrFail($id);

                $this->editingId = $note->id;

                $this->title = $note->title;
                $this->content = $note->content;
                $this->category_id = $note->category_id;

                $this->showModal = true;
            }

            // DELETE NOTE
            public function delete($id)
            {
                Note::where('user_id', Auth::id())->findOrFail($id)->delete();
            }

            public function togglePin($id)
            {
                $note = Note::where('user_id', Auth::id())
                    ->findOrFail($id);

                $note->update([
                    'is_pinned' => !$note->is_pinned,
                ]);
            }

            // TOGGLE FAVORITE
            public function toggleFavorite($id)
            {
                $note = Note::where('user_id', Auth::id())
                    ->findOrFail($id);

                $note->update([
                    'is_favorite' => !$note->is_favorite,
                ]);
            }

            // FILTER PINNED
            public function filterPinned()
            {
                $this->showPinnedOnly = true;
            }

            // RESET FILTER
            public function resetFilter()
            {
                $this->showPinnedOnly = false;
            }

            // RESET FORM
            public function resetForm()
            {
                $this->reset([
                    'title',
                    'content',
                    'category_id',
                    'editingId',
                ]);
            }

            public function render()
            {
                $notes = Note::where('user_id', Auth::id())
                    ->where('is_archived', false) // 👈 INI PENTING (biar hilang dari All Notes)
                    
                    ->when($this->search, function ($query) {
                        $query->where(function ($q) {
                            $q->where('title', 'like', '%' . $this->search . '%')
                            ->orWhere('content', 'like', '%' . $this->search . '%');
                        });
                    })

                    ->when($this->showPinnedOnly, function ($query) {
                        $query->where('is_pinned', true);
                    })

                    ->latest()
                    ->get();

                $categories = Category::where('user_id', Auth::id())->get();

                return view('livewire.user.notes', [
                    'notes' => $notes,
                    'categories' => $categories,
                ]);
            }

                public function archive($id)
                {
                    $note = Note::where('user_id', Auth::id())
                        ->findOrFail($id);

                    $note->update([
                        'is_archived' => true,
                    ]);
                }
        }