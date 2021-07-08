<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index')->with([
            'home' => Home::first()
        ]);
    }

    function validation($request)
    {
        $validate = [
            'about_title_en' => 'required',
            'about_short_text_en' => 'required',
            'alumni_title_en' => 'required',
            'alumni_short_text_en' => 'required'


        ];


        $this->validate($request, $validate);
    }

    public function update(Request $request , $id)
    {
        $this->validation($request);
        $home = Home::find(base64_decode($id));
        $data = [
            'about_title_en' => $request->about_title_en,
            'about_title_kh' => $request->about_title_kh ? $request->about_title_kh : $request->about_title_en,
            'about_short_text_en' => $request->about_short_text_en,
            'about_short_text_kh' => $request->about_short_text_kh ? $request->about_short_text_kh : $request->about_short_text_en,
            'about_btn_en' => $request->about_btn_en,
            'about_btn_kh' => $request->about_btn_kh ? $request->about_btn_kh : $request->about_btn_en,
            'about_url_btn_en' => $request->about_url_btn_en,
            'about_url_btn_kh' => $request->about_url_btn_kh ? $request->about_url_btn_kh : $request->about_url_btn_en,
            'alumni_title_en' => $request->alumni_title_en,
            'alumni_title_kh' => $request->alumni_title_kh ? $request->alumni_title_kh : $request->alumni_title_kh,
            'alumni_short_text_en' => $request->alumni_short_text_en,
            'alumni_short_text_kh' => $request->alumni_short_text_kh ?  $request->alumni_short_text_kh : $request->alumni_short_text_en,
            'alumni_btn_en' => $request->alumni_btn_en,
            'alumni_btn_kh' => $request->alumni_btn_kh ? $request->alumni_btn_kh : $request->alumni_btn_en,
            'alumni_url_btn_en' => $request->alumni_url_btn_en,
            'alumni_url_btn_kh' => $request->alumni_url_btn_kh ? $request->alumni_url_btn_kh : $request->alumni_url_btn_en


        ];
        if ($request->about_img) {
            $aboutImg= uploadImage($request->about_img,'images/');
            $data['about_img'] = $aboutImg;
        }
        if ($request->alumni_img) {
            $alumniImg= uploadImage($request->alumni_img,'images/');
            $data['alumni_img'] = $alumniImg;
        }


        $home->update($data);

        toast('success', 'Home Content has been updated.');
        return redirect()->back();
    }
}
