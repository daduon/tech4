<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\MentorDatatableResource;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MentorController extends Controller
{
  public function index(){
      return view('home.mentors.index');

  }
  public function getData(Request $request){
      $mentors = Mentor::notDelete();
      $perPage = $request->length > 0 ? $request->length : 100000;
      $mentors = $mentors->paginate($perPage,'*','page',($request->start / $perPage) + 1);
      $count = $mentors->total();
      $mentors = MentorDatatableResource::collection($mentors);
      return Datatables::of($mentors)
          ->setTotalRecords($count)
          ->setFilteredRecords($count)
          ->skipPaging()
          ->addIndexColumn()
          ->rawColumns(['img','status','action'])
          ->toJson();
  }
  public function create(){
      return view('home.mentors.create');
  }
    public function store(Request $request){

        $this->validate($request,[
            'name_en'=>'required',
            'position_en'=>'required',
            'text_en'=>'required',
          'img'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required'

        ]);
        if ($request->img) {
            $img= uploadImage($request->img,'images/mentors/');
        }
        Mentor::create([
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh ? $request->name_kh : $request->name_en,
            'position_en' => $request->position_en,
            'position_kh' => $request->position_kh ? $request->position_kh : $request->position_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'fb_url' => $request->fb_url,
            'ig_url' => $request->ig_url,
            'in_url' => $request->in_url,
            'img' => $img
        ]);
        toast('success', 'Mentors has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('home.mentors.edit')->with([
            'mentors' => Mentor::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $mentors = Mentor::find(base64_decode($id));
        $data = [
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh ? $request->name_kh : $request->name_en,
            'position_en' => $request->position_en,
            'position_kh' => $request->position_kh ? $request->position_kh : $request->position_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'fb_url' => $request->fb_url,
            'ig_url' => $request->ig_url,
            'in_url' => $request->in_url,
        ];
        if ($request->img) {
            $img= uploadImage($request->img,'images/mentors/');
            $data['img'] = $img;
        }

        $mentors->update($data);

        toast('success','Mentor has been updated.');
        return redirect()->route('mentors.edit',$id);
    }
    public function destroy($id)
    {
        $mentors = Mentor::findOrFail(base64_decode($id));
        $mentors->delete = 1;
        $mentors->save();

        toast('success','Mentor has been deleted.');
        return redirect()->route('mentors.index');
    }
}
