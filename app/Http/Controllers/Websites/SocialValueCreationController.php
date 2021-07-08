<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialPage;
use App\Models\SocialValue;
use App\Models\Gallery;

class SocialValueCreationController extends Controller
{
    public function index(){
        return view('websites.social-value-creation.index')->with([
            'socialContent' => SocialPage::first(),
            'socialValues' => SocialValue::notDelete()->orderBy('id','desc')->get()
        ]);
    }

    public function show($id){

        return view('websites.social-value-creation.show');
    }
}
