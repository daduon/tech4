<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index(){
        return view('websites.parents.index');
    }
}
