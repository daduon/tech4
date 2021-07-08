<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable =[
        'name_en',
        'name_kh',
        'url',
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
