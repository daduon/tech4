<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
        'btn_en',
        'btn_kh',
        'url_btn_en',
        'url_btn_kh',
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
