<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Press;
use App\Models\PressPage;
use App\Models\Gallery;

class PressController extends Controller
{
    public function index(){
        return view('websites.press.index')->with([
            'presses' => Press::notDelete()->orderBy('id','desc')->get(),
            'pressesContent' => PressPage::first()
        ]);
    }

    public function show($id){
        $id = decrypt($id);
        return view('websites.press.show')->with([
            'press' => Press::findOrFail($id),
            'gallerys' => Gallery::notDelete()->get()
        ]);
    }
}
