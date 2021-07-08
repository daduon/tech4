<?php

namespace App\Http\Controllers\Websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobPage;

class JobController extends Controller
{
    public function index(){
        return view('websites.job.index')->with([
            'jobContent' => JobPage::first(),
            'jobs' => Job::notDelete()->get()
        ]);
    }

    public function show($id){
        $id = decrypt($id);
        return view('websites.job.show')->with([
            'job' => Job::findOrFail($id)
        ]);
    }
}
