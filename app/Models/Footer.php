<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable =[
        'footer_logo',
        'about_text_en',
        'about_text_kh',
        'text_en',
        'text_kh',
        'gradet_text'

    ];
}
