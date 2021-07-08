<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'about_title_en',
        'about_title_kh',
        'about_short_text_en',
        'about_short_text_kh',
        'about_btn_en',
        'about_btn_kh',
        'about_url_btn_en',
        'about_url_btn_kh',
        'about_img',
        'alumni_title_en',
        'alumni_title_kh',
        'alumni_short_text_en',
        'alumni_short_text_kh',
        'alumni_btn_en',
        'alumni_btn_kh',
        'alumni_url_btn_en',
        'alumni_url_btn_kh',
        'alumni_img',

    ];
}
