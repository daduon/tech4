<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\ProgramRequest;
use App\Http\Resources\ProgramDatatableResource;
use App\Models\Group;
use App\Models\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program.index');
    }

    public function create()
    {
        return view('program.create')->with([
            'groups' => Group::all()
        ]);
    }

    public function getData(Request $request){
        $programs = Program::notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $programs = $programs->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $programs->total();
        $programs = ProgramDatatableResource::collection($programs);
        return Datatables::of($programs)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function store(ProgramRequest $request): \Illuminate\Http\RedirectResponse
    {
        $groups = array_keys($request->groups);
////        dd($request->all());
//        $this->validate($request, [
//            'title_en' => 'required',
//            'subtitle_en' => 'required',
//            'img' => 'mimes:jpeg,jpg,png|max:10000|image|required',
//            'icon' => 'mimes:jpeg,jpg,png|max:10000|image',
//            'short_text_en' => 'required',
//            'text_en' => 'required'
//        ]);

//        dd($request->all());

        $img = null;
        if ($request->img) {
            $img = uploadImage($request->img,'images/programs/');
        }

        $icon = null;
        if ($request->icon) {
            $icon = uploadImage($request->icon,'images/programs/');
        }

        $program = Program::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'sub_title_en' => $request->subtitle_en,
            'sub_title_kh' => $request->subtitle_kh ? $request->subtitle_kh : $request->subtitle_en,
            'short_text_en' => $request->short_text_en,
            'short_text_kh' => $request->short_text_kh ? $request->short_text_kh : $request->short_text_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'btn_en' => $request->btn_en,
            'btn_kh' => $request->btn_kh ? $request->btn_kh : $request->btn_en,
            'url_btn_en' => $request->btn_url_en,
            'url_btn_kh' => $request->btn_url_kh ? $request->btn_url_kh : $request->btn_url_en,
            'icon_img' => $icon,
            'img' => $img,
            'active'=>1,
            'delete'=>0
        ]);

        if ($program) {
            $program->groups()->attach($groups,[
                'created_at'=>Carbon::now()
            ]);
            toast('success','Program has been created.');
        }
        else{
            toast('Warning','Program has not been created .');
        }

        return redirect()->route('programs.create');
    }

    public function edit($id)
    {
        return view('program.edit')->with([
            'program' => Program::findOrFail(base64_decode($id)),
            'groups' => Group::all()
        ]);
    }

    public function update(ProgramRequest $request,$id): \Illuminate\Http\RedirectResponse
    {
        $groups = array_keys($request->groups);
        $program = Program::find(base64_decode($id));

        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'sub_title_en' => $request->subtitle_en,
            'sub_title_kh' => $request->subtitle_kh ? $request->subtitle_kh : $request->subtitle_en,
            'short_text_en' => $request->short_text_en,
            'short_text_kh' => $request->short_text_kh ? $request->short_text_kh : $request->short_text_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'btn_en' => $request->btn_en,
            'btn_kh' => $request->btn_kh ? $request->btn_kh : $request->btn_en,
            'url_btn_en' => $request->btn_url_en,
            'url_btn_kh' => $request->btn_url_kh ? $request->btn_url_kh : $request->btn_url_en
        ];

        $img = null;
        if ($request->img) {
            $data['img'] = uploadImage($request->img,'images/programs/');
            @unlink($program->img);
        }

        $icon = null;
        if ($request->icon) {
            $data['icon_img'] = uploadImage($request->icon,'images/programs/');
            @unlink($program->icon);
        }

//        dd($data);
        $program->update($data);
        $program->groups()->sync($groups);

        toast('success','Program has been updated.');
        return redirect()->route('programs.edit',$id);
    }

    public function destroy($id)
    {
        $program = Program::find(base64_decode($id));
        $program->update([
            'delete' => 1
        ]);

        toast('success','Program has been deleted.');
        return redirect()->route('programs.index');
    }

}
