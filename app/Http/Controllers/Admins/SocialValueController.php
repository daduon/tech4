<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SocialBenefit;
use App\Models\SocialEligible;
use App\Models\SocialInclude;
use App\Models\SocialIncludeItem;
use App\Models\SocialProcess;
use Illuminate\Http\Request;
use App\Http\Resources\SocialValueDatatableResource;
use App\Models\SocialValue;
use App\Models\SocialGallery;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class SocialValueController extends Controller
{
    public function index(){
        return view('social-values.index');
    }
    public function create(){
        return view('social-values.create');

    }
    public function getData(Request $request){
        $socials = SocialValue::with('SocialGallery')->notDelete()->orderBy('id','desc');
        $perPage = $request->length > 0 ? $request->length : 100000;
        $socials = $socials->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $socials->total();
        $socials = SocialValueDatatableResource::collection($socials);
        return DataTables::of($socials)
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
            'date'=>'required',
            'map'=>'required',
            'description_en'=>'required',
            'overview_en'=>'required',
            'outline_en'=>'required',
            'address_en'=>'required',
            'benefit_en.*'=>'required',
            'eligible_en.*'=>'required',
            'process_en.*'=>'required',
            'galleries.*'=> 'mimes:jpeg,jpg,png,gif|max:10000|image|required',
            'thumbnail'=>'mimes:jpeg,jpg,png,gif|max:10000|image|required',
            'img'=>'mimes:jpeg,jpg,png,gif|max:10000|image'
        ]);

        if ($request->thumbnail) {
            $thumbnail= uploadImage($request->thumbnail,'images/blogs/');
        }
        $socialImg = '';
        if ($request->img) {
            $socialImg= uploadImage($request->img,'images/blogs/');
        }

       $socialId = SocialValue::create([
           'title_en' => $request->title_en,
           'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
           'short_text_en' => $request->overview_en,
           'short_text_kh' => $request->overview_kh ? $request->overview_kh : $request->overview_en,
           'text_en' => $request->description_en,
           'text_kh' => $request->descriptoin_kh ? $request->descriptoin_kh : $request->description_en,
           'address_en' => $request->address_en,
           'address_kh' => $request->address_kh ? $request->address_kh : $request->address_en,
           'outline_en' => $request->outline_en,
           'outline_kh' => $request->outline_kh ? $request->outline_kh : $request->outline_en,
           'map' => $request->map,
           'thumbnail' => $thumbnail,
           'img' => $socialImg
       ])->id;

        if ($request->benefit_en) {
            $benefits = [];
            foreach ($request->benefit_en as $i => $benefit) {
                $benefits[] = [
                    'social_value_id' => $socialId,
                    'title_en' => $benefit,
                    'title_kh' => $request->benefit_kh[$i] ? $request->benefit_kh[$i] : $benefit
                ];
            }

            SocialBenefit::insert($benefits);
        }

        if ($request->eligible_en) {
            $eligibles = [];
            foreach ($request->eligible_en as $i => $eligible) {
                $eligibles[] = [
                    'social_value_id' => $socialId,
                    'title_en' => $eligible,
                    'title_kh' => $request->eligible_kh[$i] ? $request->eligible_kh[$i] : $eligible
                ];
            }

            SocialEligible::insert($eligibles);
        }

        if ($request->process_en) {
            $processes = [];
            foreach ($request->process_en as $i => $process) {
                $processes[] = [
                    'social_value_id' => $socialId,
                    'title_en' => $process,
                    'title_kh' => $request->process_kh[$i] ? $request->process_kh[$i] : $process
                ];
            }

            SocialProcess::insert($processes);
        }

        if ($request->file('galleries')) {
            $socialGalleries = [];
            foreach ($request->file('galleries') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $socialGalleries[] = [
                    'social_id' => $socialId,
                    'img' => $img
                ];
            }

            SocialGallery::insert($socialGalleries);
        }

        toast('success','Social Value has been created.');
        return redirect()->route('social-values.create');
    }

    public function edit($id){

        return view('social-values.edit')->with([
            'social' => SocialValue::with('benefits','eligibles','processes')->findOrFail(base64_decode($id)),
            'socialGalleries' => SocialGallery::where('social_id',base64_decode($id))->get()
        ]);
    }
    public function update( Request $request ,$id){

        $this->validate($request,[
            'title_en'=>'required',
            'text_en'=>'required',

        ]);
        $socials = SocialValue::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'create_by_en' => $request->create_by_en,
            'create_by_kh' => $request->create_by_kh ? $request->create_by_kh : $request->create_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en
        ];
        if ($request->thumbnail) {
            $thumbnail= uploadImage($request->thumbnail,'images/blogs/');
            $data['thumbnail'] = $thumbnail;
        }
        if ($request->content_img) {
            $socialImg = uploadImage($request->content_img,'images/blogs/');
            $data['content_img'] = $socialImg;
        }
        $socials->update($data);

        if ($request->file('img')) {
            $socialGalleries = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $socialGalleries[] = [
                    'social_id' => base64_decode($id),
                    'img' => $img,
                ];
            }

            SocialGallery::insert($socialGalleries);

        }

        toast('success','Social Value has been updated.');
        return redirect()->route('social-values.edit',$id);

    }

    public function destroy($id)
    {
        $social = SocialValue::findOrFail(base64_decode($id));
        $social->delete = 1;
        $social->save();

        toast('success','Gallery has been deleted.');
        return redirect()->route('social-values.index');
    }

    public function removeImage(Request $request){
        $socialGalleries = SocialGallery::findOrFail(base64_decode($request->id));
        $socialGalleries->delete();
    }
}
