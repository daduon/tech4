<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\JobPage;
use Illuminate\Http\Request;

class JobPageController extends Controller
{
    public function index(){
        return view('job-page.index')->with([
            'jobPage' => JobPage::first()
        ]);
    }
    function validation($request)
    {
        $validate = [
            'title_en' => 'required',
        ];
        $this->validate($request, $validate);
    }

    public function update(Request $request , $id)
    {
//        $this->validation($request);
        $jobPage = JobPage::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,


        ];
        $jobPage->update($data);

        toast('success', 'Job Content has been updated.');
        return redirect()->back();
    }
}
