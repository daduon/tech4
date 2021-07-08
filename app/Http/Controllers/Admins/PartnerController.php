<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerDatatableResource;
use App\Models\Partner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PartnerController extends Controller
{
    public function index()
    {
        return view('home.partners.index');
    }
    public function getData(Request $request) {

        $partners= Partner::notDelete();

        $perPage = $request->length > 0 ? $request->length : 100000;
        $partners = $partners->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $partners->total();

        $partners = PartnerDatatableResource::collection($partners);

        return Datatables::of($partners)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['img','status','action'])
            ->toJson();
    }
    public function create(){
        return view('home.partners.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name_en'=>'required',
            'img'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required'
        ]);
        if ($request->img) {
            $img= uploadImage($request->img,'images/partners/');
        }
        $active = $request->active ? 1 : 0;
        Partner::create([
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh ? $request->name_kh : $request->name_en,
            'url' => $request->url,
            'img' => $img,
            'active' => $active
        ]);
        toast('success', 'Partner has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('home.partners.edit')->with([
            'partners' => Partner::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $active = $request->active ? 1 : 0;
        $partners = Partner::find(base64_decode($id));
        $data = [
            'name_en' => $request->name_en,
            'name_kh' => $request->name_kh,
            'url' => $request->url,
            'active' => $active
        ];
        if ($request->img) {
            $img= uploadImage($request->img,'images/partners/');
            $data['img'] = $img;
        }

        $partners->update($data);

        toast('success','Partner has been updated.');
        return redirect()->route('partners.edit',$id);
    }
    public function destroy($id)
    {
        $partners = Partner::findOrFail(base64_decode($id));
        $partners->delete = 1;
        $partners->save();

        toast('success','Partner has been deleted.');
        return redirect()->route('partners.index');
    }
}
