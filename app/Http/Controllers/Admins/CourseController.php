<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseDatatableResource;
use App\Models\Course;
use App\Models\CourseBenefit;
use App\Models\CourseEligible;
use App\Models\CourseInclude;
use App\Models\CourseLocation;
use App\Models\CourseProcess;
use App\Models\CourseRequire;
use App\Models\Program;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.index');
    }

    public function getData(Request $request){
        $courses = Course::notDelete()->orderBy('id','desc');
        $perPage = $request->length > 0 ? $request->length : 100000;
        $courses = $courses->paginate($perPage,'*','page',($request->start / $perPage) + 1);
        $count = $courses->total();
        $courses = CourseDatatableResource::collection($courses);
        return Datatables::of($courses)
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->skipPaging()
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        return view('course.create')->with([
            'programs' => Program::notDelete()->activated()->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'program' => 'required',
            'title_en' => 'required',
            'subtitle_en' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'overview_en' => 'required',
            'outline_en' => 'required',
            'structure_en' => 'required',
            'include_en.*' => 'required',
            'requirement_en.*' => 'required',
            'benefit_en.*' => 'required',
            'eligible_en.*' => 'required',
            'process_en.*' => 'required',
            'location_en.*' => 'required',
            'map.*' => 'required',
            'img' => 'mimes:jpeg,jpg,png|max:10000|image|required',
            'icon' => 'mimes:jpeg,jpg,png|max:10000|image'
        ]);

        $img = null;
        if ($request->img) {
            $img = uploadImage($request->img,'images/course/');
        }

        $icon = null;
        if ($request->icon) {
            $icon = uploadImage($request->icon,'images/course/');
        }

        $courseId = Course::create([
            'program_id' => base64_decode($request->program),
            'title_en' => $request->title_en,
            'title_kh' => $request->title_kh ? $request->title_kh : $request->title_en,
            'sub_title_en' => $request->subtitle_en,
            'sub_title_kh' => $request->subtitle_kh ? $request->subtitle_kh : $request->subtitle_en,
            'overview_en' => $request->overview_en,
            'overview_kh' => $request->overview_kh ? $request->overview_kh : $request->overview_en,
            'outline_en' => $request->outline_en,
            'outline_kh' => $request->outline_kh ? $request->outline_kh : $request->outline_en,
            'structure_en' => $request->structure_en,
            'structure_kh' => $request->structure_kh ? $request->structure_kh : $request->structure_en,
            'date_from' => date('Y-m-d',strtotime($request->start_date)),
            'date_to' => date('Y-m-d',strtotime($request->end_date)),
            'price' => $request->price,
            'icon_img' => $icon,
            'img' => $img
        ])->id;

        if ($request->include_en) {
            $includes = [];
            foreach ($request->include_en as $i => $include) {
                $includes[] = [
                    'course_id' => $courseId,
                    'title_en' => $include,
                    'title_kh' => $request->include_kh[$i] ? $request->include_kh[$i] : $include
                ];
            }

            CourseInclude::insert($includes);
        }

        if ($request->requirement_en) {
            $requirements = [];
            foreach ($request->requirement_en as $i => $requirement) {
                $requirements[] = [
                    'course_id' => $courseId,
                    'title_en' => $requirement,
                    'title_kh' => $request->requirement_kh[$i] ? $request->requirement_kh[$i] : $requirement
                ];
            }

            CourseRequire::insert($requirements);
        }

        if ($request->benefit_en) {
            $benefits = [];
            foreach ($request->benefit_en as $i => $benefit) {
                $benefits[] = [
                    'course_id' => $courseId,
                    'title_en' => $benefit,
                    'title_kh' => $request->benefit_kh[$i] ? $request->benefit_kh[$i] : $benefit
                ];
            }

            CourseBenefit::insert($benefits);
        }

        if ($request->eligible_en) {
            $eligibles = [];
            foreach ($request->eligible_en as $i => $eligible) {
                $eligibles[] = [
                    'course_id' => $courseId,
                    'title_en' => $eligible,
                    'title_kh' => $request->eligible_kh[$i] ? $request->eligible_kh[$i] : $eligible
                ];
            }

            CourseEligible::insert($eligibles);
        }

        if ($request->process_en) {
            $processes = [];
            foreach ($request->process_en as $i => $process) {
                $processes[] = [
                    'course_id' => $courseId,
                    'title_en' => $process,
                    'title_kh' => $request->process_kh[$i] ? $request->process_kh[$i] : $process
                ];
            }

            CourseProcess::insert($processes);
        }

        if ($request->location_en) {
            $locations = [];
            foreach ($request->location_en as $i => $location) {
                $locations[] = [
                    'course_id' => $courseId,
                    'title_en' => $location,
                    'title_kh' => $request->location_kh[$i] ? $request->location_kh[$i] : $location,
                    'map' => $request->map[$i]
                ];
            }

            CourseLocation::insert($locations);
        }

        toast('success','Course has been created.');
        return redirect()->route('courses.create');
    }

    public function edit($id)
    {
        return view('course.edit')->with([
            'programs' => Program::notDelete()->activated()->get(),
            'course' => Course::with('includes','requirements','benefits','eligibles','processes','locations')->findOrFail(base64_decode($id))
        ]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'program' => 'required',
            'title_en' => 'required',
            'subtitle_en' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'overview_en' => 'required',
            'outline_en' => 'required',
            'structure_en' => 'required',
            'include_en.*' => 'required',
            'requirement_en.*' => 'required',
            'benefit_en.*' => 'required',
            'eligible_en.*' => 'required',
            'process_en.*' => 'required',
            'location_en.*' => 'required',
            'map.*' => 'required',
            'img' => 'mimes:jpeg,jpg,png|max:10000|image',
            'icon' => 'mimes:jpeg,jpg,png|max:10000|image'
        ]);
        $courseId = base64_decode($id);
        $course = Course::findOrFail($courseId);

        $img = null;
        if ($request->img) {
            $img = uploadImage($request->img,'images/course/');
            @unlink($course->img);
        }

        $icon = null;
        if ($request->icon) {
            $icon = uploadImage($request->icon,'images/course/');
            @unlink($course->icon_img);
        }

        $course->program_id = base64_decode($request->program);
        $course->title_en = $request->title_en;
        $course->title_kh = $request->title_kh ? $request->title_kh : $request->title_en;
        $course->sub_title_en = $request->subtitle_en;
        $course->sub_title_kh = $request->subtitle_kh ? $request->subtitle_kh : $request->subtitle_en;
        $course->overview_en = $request->overview_en;
        $course->overview_kh = $request->overview_kh ? $request->overview_kh : $request->overview_en;
        $course->outline_en = $request->outline_en;
        $course->outline_kh = $request->outline_kh ? $request->outline_kh : $request->outline_en;
        $course->structure_en = $request->structure_en;
        $course->structure_kh = $request->structure_kh ? $request->structure_kh : $request->structure_en;
        $course->date_from = date('Y-m-d',strtotime($request->start_date));
        $course->date_to = date('Y-m-d',strtotime($request->end_date));
        $course->price = $request->price;
        $course->icon_img = $icon ? $icon : $course->icon_img;
        $course->img = $img ? $img : $course->img;
        $course->save();

        if ($request->include_en) {
            CourseInclude::where('course_id',$courseId)->delete();
            $includes = [];
            foreach ($request->include_en as $i => $include) {
                $includes[] = [
                    'course_id' => $courseId,
                    'title_en' => $include,
                    'title_kh' => $request->include_kh[$i] ? $request->include_kh[$i] : $include
                ];
            }

            CourseInclude::insert($includes);
        }

        if ($request->requirement_en) {
            CourseRequire::where('course_id',$courseId)->delete();
            $requirements = [];
            foreach ($request->requirement_en as $i => $requirement) {
                $requirements[] = [
                    'course_id' => $courseId,
                    'title_en' => $requirement,
                    'title_kh' => $request->requirement_kh[$i] ? $request->requirement_kh[$i] : $requirement
                ];
            }

            CourseRequire::insert($requirements);
        }

        if ($request->benefit_en) {
            CourseBenefit::where('course_id',$courseId)->delete();
            $benefits = [];
            foreach ($request->benefit_en as $i => $benefit) {
                $benefits[] = [
                    'course_id' => $courseId,
                    'title_en' => $benefit,
                    'title_kh' => $request->benefit_kh[$i] ? $request->benefit_kh[$i] : $benefit
                ];
            }

            CourseBenefit::insert($benefits);
        }

        if ($request->eligible_en) {
            CourseEligible::where('course_id',$courseId)->delete();
            $eligibles = [];
            foreach ($request->eligible_en as $i => $eligible) {
                $eligibles[] = [
                    'course_id' => $courseId,
                    'title_en' => $eligible,
                    'title_kh' => $request->eligible_kh[$i] ? $request->eligible_kh[$i] : $eligible
                ];
            }

            CourseEligible::insert($eligibles);
        }

        if ($request->process_en) {
            CourseProcess::where('course_id',$courseId)->delete();
            $processes = [];
            foreach ($request->process_en as $i => $process) {
                $processes[] = [
                    'course_id' => $courseId,
                    'title_en' => $process,
                    'title_kh' => $request->process_kh[$i] ? $request->process_kh[$i] : $process
                ];
            }

            CourseProcess::insert($processes);
        }

        if ($request->location_en) {
            CourseLocation::where('course_id',$courseId)->delete();
            $locations = [];
            foreach ($request->location_en as $i => $location) {
                $locations[] = [
                    'course_id' => $courseId,
                    'title_en' => $location,
                    'title_kh' => $request->location_kh[$i] ? $request->location_kh[$i] : $location,
                    'map' => $request->map[$i]
                ];
            }

            CourseLocation::insert($locations);
        }


        toast('success','Course has been updated.');
        return redirect()->route('courses.edit',$id);
    }

    public function destroy($id)
    {
        $course = Course::findOrFail(base64_decode($id));
        $course->update(['delete' => 1]);

        toast('success','Course has been deleted.');
        return redirect()->route('courses.index');
    }
}
