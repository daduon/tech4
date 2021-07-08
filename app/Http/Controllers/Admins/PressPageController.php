<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\PressPage;
use Illuminate\Http\Request;

class PressPageController extends Controller
{
    public function index(){
        return view('press-page.index')->with([
            'pressPage' => PressPage::first()
        ]);
    }
    function validation($request)
    {
        $validate = [
            'title_en' => 'required',
            'text_en' => 'required',
            'alumni_title_en' => 'required',
            'alumni_text_en' => 'required'


        ];
        $this->validate($request, $validate);
    }

    public function update(Request $request , $id)
    {
//        $this->validation($request);
        $pressPage = PressPage::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,


        ];
        $pressPage->update($data);

        toast('success', 'Press Content has been updated.');
        return redirect()->back();
    }
}
