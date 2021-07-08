<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $fillable =[
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
        'create_by',
        'thumbnail',
        'content_img',
        'active',
        'delete'
    ];
    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }

    public function scopeActivated($q) {
        return $q->where('active', 1);
    }
    public function pressGallery()
    {
        return $this->hasMany(PressGallery::class);
    }
}
