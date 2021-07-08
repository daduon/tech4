<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialGallery extends Model
{
    protected $fillable =[
        'social_id',
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
