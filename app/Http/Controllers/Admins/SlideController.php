<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\SlideDatatableResource;
use App\Models\Slide;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SlideController extends Controller
{
    public function index()
    {
        return view('home.slides.index');
    }
    public function getData(Request $request) {

        $slides= Slide::notDelete();

        $perPage = $request->length > 0 ? $request->length : 100000;
        $slides = $slides->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $slides->total();

        $slides = SlideDatatableResource::collection($slides);

        return Datatables::of($slides)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['img','status','action'])
            ->toJson();
    }
    public function create(){
        return view('home.slides.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title_en'=>'required',
            'img'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required'
        ]);
        if ($request->img) {
            $img= uploadImage($request->img,'images/slides/');
        }
        $active = $request->active ? 1 : 0;
      Slide::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'btn_en' => $request->btn_en,
            'btn_kh' => $request->btn_kh ? $request->btn_kh : $request->btn_en,
            'url_btn_en' => $request->url_btn_en,
            'url_btn_kh' => $request->url_btn_kh ? $request->url_btn_kh : $request->url_btn_en,
            'img' => $img,
            'active' => $active
        ]);
        toast('success', 'Slide has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('home.slides.edit')->with([
            'slides' => Slide::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $active = $request->active ? 1 : 0;
        $slides = Slide::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh,
            'btn_en' => $request->btn_en,
            'btn_kh' => $request->btn_kh,
            'url_btn_en' => $request->url_btn_en,
            'url_btn_kh' => $request->url_btn_kh,
            'active' => $active
        ];
        if ($request->img) {
            $img= uploadImage($request->img,'images/slides/');
            $data['img'] = $img;
        }

        $slides->update($data);

        toast('success','Slide has been updated.');
        return redirect()->route('slides.edit',$id);
    }
    public function destroy($id)
    {
        $slides = Slide::findOrFail(base64_decode($id));
        $slides->delete = 1;
        $slides->save();

        toast('success','Slide has been deleted.');
        return redirect()->route('slides.index');
    }

}
