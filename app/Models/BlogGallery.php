<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogGallery extends Model
{
    protected $fillable =[
        'blog_id',
        'img',
        'active',
        'delete'
    ];

    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }
    public function scopeActivated($q) {
        return $q->where('active', 1);
    }
}
