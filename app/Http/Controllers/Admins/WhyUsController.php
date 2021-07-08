<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\WhyUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Resources\WhyUsDatatableResource;

class WhyUsController extends Controller
{
   public function  index(){
       return view('home.why-us.index');
   }
    public function getData(Request $request) {

        $whyUs= WhyUs::notDelete();

        $perPage = $request->length > 0 ? $request->length : 100000;
        $whyUs = $whyUs->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $whyUs->total();

        $whyUs = WhyUsDatatableResource::collection($whyUs);

        return Datatables::of($whyUs)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['icon_img','status','action'])
            ->toJson();
    }
    public function create(){
        return view('home.why-us.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title_en'=>'required',
        ]);
        $img = 'images/why-us/why-us.png';
        if ($request->icon_img) {
            $img= uploadImage($request->icon_img,'images/why-us/');
        }

        $active = $request->active ? 1 : 0;
        WhyUs::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'short_text_en' => $request->short_text_en,
            'short_text_kh' => $request->short_text_kh ? $request->short_text_kh : $request->short_text_en,
            'icon_img' => $img,
            'active' => $active
        ]);
        toast('success', 'Why Us has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('home.why-us.edit')->with([
            'whyUs' => WhyUs::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $active = $request->active ? 1 : 0;
        $whyUs = WhyUs::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'short_text_en' => $request->short_text_en,
            'short_text_kh' => $request->short_text_kh ? $request->short_text_kh : $request->short_text_en,
            'active' => $active
        ];
        if ($request->icon_img) {
            $img= uploadImage($request->icon_img,'images/why-us/');
            $data['icon_img'] = $img;
        }

        $whyUs->update($data);

        toast('success','Why us has been updated.');
        return redirect()->route('why-us.edit',$id);
    }
    public function destroy($id)
    {
        $whyUs = WhyUs::findOrFail(base64_decode($id));
        $whyUs->delete = 1;
        $whyUs->save();

        toast('success','Why Us has been deleted.');
        return redirect()->route('why-us.index');
    }
}
