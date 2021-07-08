<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable =[
        'name_en',
        'name_kh',
        'position_en',
        'position_kh',
        'text_en',
        'text_kh',
        'fb_url',
        'ig_url',
        'in_url',
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
