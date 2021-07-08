<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
   protected $fillable= [
       'title_en',
       'title_kh',
       'short_text_en',
       'short_text_kh',
       'icon_img',
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
