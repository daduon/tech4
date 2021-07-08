<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SocialGallery;

class SocialValue extends Model
{
    protected $fillable = [
        'title_en',
        'title_kh',
        'short_text_en',
        'short_text_kh',
        'text_en',
        'text_kh',
        'outline_en',
        'outline_kh',
        'address_en',
        'address_kh',
        'date',
        'map',
        'thumbnail',
        'img',
        'active',
        'delete'

    ];

    public function scopeNotDelete($q)
    {
        return $q->where('delete', 0);
    }

    public function scopeActivated($q)
    {
        return $q->where('active', 1);
    }

    public function benefits()
    {
        return $this->hasMany(SocialBenefit::class);
    }

    public function eligibles()
    {
        return $this->hasMany(SocialEligible::class);
    }

    public function processes()
    {
        return $this->hasMany(SocialProcess::class);
    }

    public function SocialGallery()
    {
        return $this->hasMany(SocialGallery::class,'social_id','id');
    }
}

