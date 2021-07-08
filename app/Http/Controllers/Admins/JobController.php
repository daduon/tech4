<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobDatatableResource;
use App\Models\Job;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class JobController extends Controller
{
    public function index(){
        return view('job-opportunities.index');
    }
    public function getData(Request $request){
        $Jobs = Job::notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $Jobs = $Jobs->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $Jobs->total();
        $Jobs = JobDatatableResource::collection($Jobs);
        return Datatables::of($Jobs)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['icon_img','status','action'])
            ->toJson();
    }
    public function create(){
        return view('job-opportunities.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'title_en'=>'required',
            'position'=>'required',
            'text_en'=>'required',
        ]);
        $dateFrom = date('Y-m-d', strtotime($request->date_from));
        $dateTo = date('Y-m-d', strtotime($request->date_to));
        $img = 'images/why-us/why-us.png';
        if ($request->icon_img) {
            $img= uploadImage($request->icon_img,'images/why-us/');
        }

        $active = $request->active ? 1 : 0;
        Job::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'date_from' => $dateFrom,
            'date_to' => $dateTo,
            'position' => $request->position,
            'icon_img' => $img,
            'active' => $active
        ]);
        toast('success', 'Job has been created.');
        return redirect()->back();
    }
    public function edit($id){
        return view('job-opportunities.edit')->with([
            'jobs' => Job::findOrFail(base64_decode($id))
        ]);
    }
    public function update(Request $request, $id){

        $dateFrom = date('Y-m-d', strtotime($request->date_from));
        $dateTo = date('Y-m-d', strtotime($request->date_to));
        $active = $request->active ? 1 : 0;
        $jobs = Job::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'date_from' => $dateFrom,
            'date_to' => $dateTo,
            'position' => $request->position,
            'active' => $active
        ];

        if ($request->icon_img) {
            $img= uploadImage($request->icon_img,'images/why-us/');
            $data['icon_img'] = $img;
        }
        $jobs->update($data);

        toast('success','Job has been updated.');
        return redirect()->route('job-opportunities.edit',$id);
    }
    public function destroy($id)
    {
        $jobs = Job::findOrFail(base64_decode($id));
        $jobs->delete = 1;
        $jobs->save();

        toast('success','Job has been deleted.');
        return redirect()->route('job-opportunities.index');
    }

}
