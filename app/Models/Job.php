<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =[
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
        'cv_pdf',
        'icon_img',
        'position',
        'date_from',
        'date_to',
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
