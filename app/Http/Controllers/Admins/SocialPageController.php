<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SocialPage;
use Illuminate\Http\Request;

class SocialPageController extends Controller
{
    public function index(){
        return view('social-page.index')->with([
            'socialPage' => SocialPage::first()
        ]);
    }


    public function update(Request $request , $id)
    {
        $socialPage = SocialPage::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,


        ];
        $socialPage->update($data);

        toast('success', 'Press Content has been updated.');
        return redirect()->back();
    }
}
