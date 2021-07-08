<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MiniChallengePage extends Model
{
    protected $table = 'mini_challenge_page';
    protected $fillable =[
        'title_en',
        'title_kh',
        'text_en',
        'text_kh',
    ];
}
