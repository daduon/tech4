<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        return view('websites.school.index');
    }

    public function ListCourses(){
        return view('websites.school.list-courses');
    }

    public function kathon(){
        return view('websites.school.kathon');
    }
}
