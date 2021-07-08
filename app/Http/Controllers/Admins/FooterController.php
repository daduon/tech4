<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index(){
        return view('footer.index')->with([
            'footer' => Footer::first()
        ]);
    }
    function validation($request)
    {
        $validate = [
            'img'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required',
            'about_text_en' => 'required',
            'text_en' => 'required',
            'gradet_text' => 'required'


        ];
        $this->validate($request, $validate);
    }

    public function update(Request $request , $id)
    {
//        $this->validation($request);
        if ($request->footer_logo) {
            $footer_logo= uploadImage($request->footer_logo,'images/slides/');
        }
        $footer = Footer::find(base64_decode($id));
        $data = [
            'footer_logo'=> $footer_logo,
            'about_text_en' => $request->about_text_en,
            'about_text_kh' => $request->about_text_kh ? $request->about_text_kh : $request->about_text_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'gradet_text' => $request->text_en,

        ];
        $footer->update($data);

        toast('success', 'Footer Content has been updated.');
        return redirect()->back();
    }
}
