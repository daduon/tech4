<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PressPage extends Model
{
    protected $fillable =[
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',

    ];
}
