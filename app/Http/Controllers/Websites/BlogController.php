<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogPage;
use App\Models\Gallery;
use App\Models\Group;

class BlogController extends Controller
{
    public function index(){
        return view('websites.blog.index')->with([
            'blogs' => Blog::notDelete()->orderBy('id','desc')->get(),
            'blogContent' => BlogPage::first()
        ]);
    }

    public function show($id){
        $id = decrypt($id);
        return view('websites.blog.show')->with([
            'blog' => Blog::findOrFail($id),
            'gallerys' => Gallery::notDelete()->get(),
            'group' => Group::where('id', 2)->get()
        ]);
    }
}
