<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable =[
        'web_name',
        'logo',
        'email',
        'phone',
        'website',
        'address',
        'fb_url',
        'link_url',
        'ig_url'

    ];
}
