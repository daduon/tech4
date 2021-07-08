<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogDatatableResource;
use App\Models\Blog;
use App\Models\BlogGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index');
    }
    public function create(){
        return view('blogs.create');
    }
    public function getData(Request $request){
        $blogs = Blog::with('blogGallery')->notDelete();
        $perPage = $request->length > 0 ? $request->length : 100000;
        $blogs = $blogs->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $blogs->total();
        $blogs = BlogDatatableResource::collection($blogs);
        return Datatables::of($blogs)
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
            $thumbnail= uploadImage($request->thumbnail,'images/blogs/');
        }
        $blogImg = '';
        if ($request->content_img) {
            $blogImg= uploadImage($request->content_img,'images/blogs/');
        }
        $blogImg_1 = '';
        if ($request->content_img_2) {
            $blogImg_1 = uploadImage($request->content_img_2,'images/blogs/');
        }

       $blogId = Blog::create([
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'create_by_en' => $request->create_by_en,
            'create_by_kh' => $request->create_by_kh ? $request->create_by_kh : $request->create_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'description_en' => $request->description_en,
            'description_kh' => $request->description_kh ? $request->description_kh : $request->description_en,
            'key_description' => $request->key_description,
            'thumbnail' => $thumbnail,
            'reading_time' => $request->reading_time,
            'share_link' => $request->share_link,
            'content_img' => $blogImg,
            'content_img_2' => $blogImg_1,
            'choose_option' => $request->choose_option,
            'created_by' => Auth::user()->id
       ])->id;
  
        if ($request->file('img')) {
            $blogGalleries = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $blogGalleries[] = [
                    'blog_id' => $blogId,
                    'img' => $img,
                ];
            }

            BlogGallery::insert($blogGalleries);

        }

        toast('success','Blog has been created.');
        return redirect()->route('blogs.create');
    }

    public function edit($id){

        return view('blogs.edit')->with([
            'blogs' =>Blog::findOrFail(base64_decode($id)),
            'blogGalleries' => BlogGallery::where('blog_id',base64_decode($id))->get()
        ]);
    }
    public function update( Request $request ,$id){

        $this->validate($request,[
            'title_en'=>'required',
            'text_en'=>'required',

        ]);
        $blogs = Blog::find(base64_decode($id));
        $data = [
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'create_by_en' => $request->create_by_en,
            'create_by_kh' => $request->create_by_kh ? $request->create_by_kh : $request->create_by_en,
            'text_en' => $request->text_en,
            'text_kh' => $request->text_kh ? $request->text_kh : $request->text_en,
            'description_en' => $request->description_en,
            'description_kh' => $request->description_kh ? $request->description_kh : $request->description_en,
            'key_description' => $request->key_description ? $request->key_description : '',
            'reading_time' => $request->reading_time ? $request->reading_time : '',
            'share_link' => $request->share_link ? $request->share_link : ''
        ];
        if ($request->thumbnail) {
            $thumbnail= uploadImage($request->thumbnail,'images/blogs/');
            $data['thumbnail'] = $thumbnail;
        }
        if ($request->content_img) {
            $blogImg = uploadImage($request->content_img,'images/blogs/');
            $data['content_img'] = $blogImg;
        }
        if ($request->content_img_2) {
            $blogImg_1 = uploadImage($request->content_img_2,'images/blogs/');
            $data['content_img_2'] = $blogImg_1;
        }

        $blogs->update($data);

        if ($request->file('img')) {
            $blogGalleries = [];
            foreach ($request->file('img') as $img) {
                $img = uploadImage($img,'images/gallery/');
                $blogGalleries[] = [
                    'blog_id' => base64_decode($id),
                    'img' => $img,
                ];
            }

            BlogGallery::insert($blogGalleries);

        }

        toast('success','Blog has been updated.');
        return redirect()->route('blogs.edit',$id);

    }

    public function destroy($id)
    {

        $blogs = Blog::findOrFail(base64_decode($id));
        $blogs->delete = 1;
        $blogs->save();

        toast('success','Gallery has been deleted.');
        return redirect()->route('blogs.index');
    }
    public function removeImage(Request $request){
        $blogGalleries = BlogGallery::findOrFail(base64_decode($request->id));
        $blogGalleries->delete();

        toast('success','Blog Gallery has been deleted.');

    }

}
