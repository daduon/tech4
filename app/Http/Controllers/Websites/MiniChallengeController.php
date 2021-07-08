<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Benefit;

class MiniChallengeController extends Controller
{
    public function index(){
        return view('websites.mini-challenge.index')->with([
            'benefits' => Benefit::notDelete()->get(),
            'gallerys' => Gallery::notDelete()->get()
        ]);
    }

    public function kathon(){
        return view('websites.mini-challenge.kathon');
    }

    public function show(){
        return view('websites.mini-challenge.show');
    }
}
