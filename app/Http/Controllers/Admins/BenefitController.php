<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\BenefitDatatableResource;
use App\Models\Benefit;
use App\Models\Group;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BenefitController extends Controller
{
    public function index(){
        return view('benefits.index')->with([
            'groups' => Group::notDelete()->active()->pluck('name','id')
        ]);
    }
    public function getData(Request $request){
        $benefits = Benefit::with('group')->notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $benefits = $benefits->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $benefits->total();
        $benefits = BenefitDatatableResource::collection($benefits);
        return Datatables::of($benefits)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['icon_img','status','action'])
            ->toJson();
    }

    public function create(){
        return view('benefits.create')->with([
            'groups' => Group::notDelete()->active()->get()
        ]);
    }
    public function store(Request $request){

        $this->validate($request,[
            'title_en'=>'required',
        ]);
        $img = 'images/why-us/why-us.png';
        if ($request->icon_img) {
            $img= uploadImage($request->icon_img,'images/benefit/');
        }
        $groupId = base64_decode($request->group_id);

        $active = $request->active ? 1 : 0;
        Benefit::create([
            'group_id'=> $groupId,
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->short_text_en,
            'icon_img' => $img,
            'active' => $active
        ]);
        toast('success', 'Benefits has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('benefits.edit')->with([
            'benefits' => Benefit::findOrFail(base64_decode($id)),
            'groups' => Group::notDelete()->active()->get()
        ]);
    }
    public function update(Request $request, $id){

        $groupId = base64_decode($request->group_id);
        $active = $request->active ? 1 : 0;
        $benefits = Benefit::find(base64_decode($id));
        $data = [
            'group_id'=> $groupId,
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->short_text_en,
            'active' => $active
        ];
        if ($request->img) {
            $img= uploadImage($request->img,'images/benefits/');
            $data['img'] = $img;
        }

        $benefits->update($data);

        toast('success','Benefit has been updated.');
        return redirect()->route('benefits.edit',$id);
    }
    public function destroy($id)
    {
        $benefits = Benefit::findOrFail(base64_decode($id));
        $benefits->delete = 1;
        $benefits->save();

        toast('success','Mentor has been deleted.');
        return redirect()->route('benefits.index');
    }
}
