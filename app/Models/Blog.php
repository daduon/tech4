<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =[
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
        'create_by_en',
        'create_by_kh',
        'thumbnail',
        'content_img',
        'content_img_2',
        'active',
        'delete',
        'description_en',
        'description_kh',
        'key_description',
        'reading_time',
        'share_link',
        'choose_option'

    ];
    public function scopeNotDelete($q) {
        return $q->where('delete', 0);
    }

    public function scopeActivated($q) {
        return $q->where('active', 1);
    }
    public function blogGallery()
    {
        return $this->hasMany(BlogGallery::class);
    }
}
