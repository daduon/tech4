<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialBenefit extends Model
{
    protected $fillable =[
        'social_value_id',
        'title_en',
        'title_kh'
    ];
}
