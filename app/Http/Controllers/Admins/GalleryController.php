<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryDatatableResource;
use App\Models\Gallery;
use App\Models\Group;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    public function index(){
        return view('galleries.index')->with([
            'groups' => Group::all()
        ]);
    }
    public function getData(Request $request){
        $groups = Group::with('gallery')->notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $groups = $groups->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $groups->total();
        $groups = GalleryDatatableResource::collection($groups);
        return Datatables::of($groups)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['status','action'])
            ->toJson();
    }
    public function store(Request $request){

        $groupId = base64_decode($request->group_id);
        $active = $request->active ? 1 : 0;
        if ($request->file('img')) {
            $galleryImages = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $galleryImages[] = [
                    'group_id' => $groupId,
                    'img' => $img,
                    'active' => $active
                ];
            }
            Gallery::insert($galleryImages);
        }
        toast('success', 'Benefits has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('galleries.edit')->with([
            'galleries' => Gallery::where('group_id',base64_decode($id))->notDelete()->get(),
            'group' => Group::find(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $groupId = base64_decode($id);
        $galleries = Gallery::find(base64_decode($id));
        if ($request->file('img')) {
            $galleryImages = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $galleryImages[] = [
                    'group_id' => $groupId,
                    'img' => $img,
                ];
            }
            dd($galleries);
            $galleries->insert($galleryImages);
        }


        toast('success','Gallery  have been updated successfully.');
        return redirect()->route('galleries.edit',$id);
    }
    public function destroy(Request $request)
    {

        $galleries = Gallery::findOrFail(base64_decode($request->id));
        $galleries->delete = 1;
        $galleries->save();


        toast('success','Gallery has been deleted.');
        return redirect()->route('galleries.index');
    }
}
