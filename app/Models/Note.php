<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    
    use SoftDeletes;
    //
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
        'is_pinned',
        'is_archived',
        'is_favorite',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
