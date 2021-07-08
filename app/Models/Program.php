<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable =[
        'title_en',
        'title_kh',
        'sub_title_en',
        'sub_title_kh',
        'short_text_en',
        'short_text_kh',
        'text_en',
        'text_kh',
        'btn_en',
        'btn_kh',
        'url_btn_en',
        'url_btn_kh',
        'icon_img',
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

    public function groups(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Group::class,'program_groups','program_id','group_id');
    }
}
