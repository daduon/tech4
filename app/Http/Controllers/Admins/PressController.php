<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\PressDatatableResource;
use App\Models\Press;
use App\Models\PressGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PressController extends Controller
{
    public function index(){
        return view('presses.index');
    }
    public function create(){
        return view('presses.create');
    }
    public function getData(Request $request){
        $presses = Press::with('pressGallery')->notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $presses = $presses->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $presses->total();
        $presses = PressDatatableResource::collection($presses);
        return Datatables::of($presses)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['thumbnail','status','action'])
            ->toJson();
    }
    public function store(Request $request){

        $this->validate($request,[
            'title_en'=>'required',
            'text_en'=>'required',
            'thumbnail'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required'

        ]);

        if ($request->thumbnail) {
            $thumbnail= uploadImage($request->thumbnail,'images/presses/');
        }
        $pressImg = '';
        if ($request->content_img) {
            $pressImg= uploadImage($request->content_img,'images/presses/');
        }

        $pressId = Press::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'create_by_en' => $request->create_by_en,
            'create_by_kh' => $request->create_by_kh ? $request->create_by_kh : $request->create_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'thumbnail' => $thumbnail,
            'content_img' => $pressImg,
            'created_by' => Auth::user()->id
        ])->id;
        if ($request->file('img')) {
            $pressGalleries = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $pressGalleries[] = [
                    'press_id' => $pressId,
                    'img' => $img,
                ];
            }

            PressGallery::insert($pressGalleries);

        }

        toast('success','Press has been created.');
        return redirect()->route('presses.create');
    }

    public function edit($id){

        return view('presses.edit')->with([
            'presses' =>Press::findOrFail(base64_decode($id)),
            'pressGalleries' => PressGallery::where('press_id',base64_decode($id))->get()
        ]);
    }
    public function update( Request $request ,$id){

        $this->validate($request,[
            'title_en'=>'required',
            'text_en'=>'required',

        ]);
        $presses = Press::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'create_by_en' => $request->create_by_en,
            'create_by_kh' => $request->create_by_kh ? $request->create_by_kh : $request->create_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en
        ];
        if ($request->thumbnail) {
            $thumbnail= uploadImage($request->thumbnail,'images/presses/');
            $data['thumbnail'] = $thumbnail;
        }
        if ($request->content_img) {
            $pressImg = uploadImage($request->content_img,'images/presses/');
            $data['content_img'] = $pressImg;
        }
        $presses->update($data);

        if ($request->file('img')) {
            $pressGalleries = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $pressGalleries[] = [
                    'press_id' => base64_decode($id),
                    'img' => $img,
                ];
            }

            PressGallery::insert($pressGalleries);

        }

        toast('success','Press has been updated.');
        return redirect()->route('presses.edit',$id);

    }

    public function destroy($id)
    {

        $presses = Press::findOrFail(base64_decode($id));
        $presses->delete = 1;
        $presses->save();

        toast('success','Gallery has been deleted.');
        return redirect()->route('presses.index');
    }
    public function removeImage(Request $request){
        $pressGalleries = PressGallery::findOrFail(base64_decode($request->id));
        $pressGalleries->delete();

        toast('success','Press Gallery has been deleted.');

    }
}
