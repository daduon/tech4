<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable =[
        'group_id',
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
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
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

}
