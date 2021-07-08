<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialDatatableResource;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    public function index(){
        return view('home.testimonials.index');

    }
    public function getData(Request $request){
        $testimonials = Testimonial::notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $testimonials = $testimonials->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $testimonials->total();
        $testimonials = TestimonialDatatableResource::collection($testimonials);
        return Datatables::of($testimonials)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['img','status','action'])
            ->toJson();
    }
    public function create(){
        return view('home.testimonials.create');
    }
    public function store(Request $request){

        $this->validate($request,[
            'name_en'=>'required',
            'say_by_en'=>'required',
            'text_en'=>'required',

        ]);
        if ($request->img) {
            $img= uploadImage($request->img,'images/testimonials/');
        }

        $active = $request->active ? 1 : 0;
        Testimonial::create([
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh ? $request->name_kh : $request->name_en,
            'say_by_en' => $request->say_by_en,
            'say_by_kh' => $request->say_by_kh ? $request->say_by_kh : $request->say_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'img' => $img,
            'active' => $active
        ]);
        toast('success', 'Testimonial has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('home.testimonials.edit')->with([
            'testimonials' => Testimonial::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $active = $request->active ? 1 : 0;
        $testimonials = Testimonial::find(base64_decode($id));
        $data = [
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh ? $request->name_kh : $request->name_en,
            'say_by_en' => $request->say_by_en,
            'say_by_kh' => $request->say_by_kh ? $request->say_by_kh : $request->say_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'active' => $active
        ];
        if ($request->img) {
            $img= uploadImage($request->img,'images/testimonials/');
            $data['img'] = $img;
        }

        $testimonials->update($data);

        toast('success','Testimonial has been updated.');
        return redirect()->route('testimonials.edit',$id);
    }
    public function destroy($id)
    {
        $testimonials = Testimonial::findOrFail(base64_decode($id));
        $testimonials->delete = 1;
        $testimonials->save();

        toast('success','Testimonial has been deleted.');
        return redirect()->route('testimonials.index');
    }
}
