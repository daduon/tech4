@extends('layouts.web')
@section('content')
    <div class="container" id="school">
        <section class="courses sy-4">
            <div class="head-sec">
                <div class="head sb-4 text-center">
                    <h2 class="title">Kid Kathon Upcoming Program</h2>
                    <div class="line-red-center"></div>
                </div>
            </div>
            <div class="row list-course">
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#tech-for-kid-course" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">Coding For Kide</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#2" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">tech for kid courses</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#3" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">tech for kid courses</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @for($i=0 ; $i<=4 ; $i++)
                    <div class="col-3 mb-3 swiper-slide">
                        <a href="#4" class="link">
                            <div class="course-box">
                                <div class="content-box">
                                    <div class="icon-course">
                                        <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">tech for kid courses</h4>
                                        <div class="sub-title">
                                            <strong>Sub title of class</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endfor
            </div>
        </section>
    
        <section class="sy-4 courses pt-5">
            <div class="head-sec">
                <div class="head sb-4 text-center">
                    <h2 class="title">Kid Kathon Provious Program</h2>
                    <div class="line-red-center"></div>
                </div>
            </div>
            <div class="row list-course">
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#tech-for-kid-course" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">Coding For Kide</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#2" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">tech for kid courses</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3 mb-3 swiper-slide">
                    <a href="#3" class="link">
                        <div class="course-box">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">tech for kid courses</h4>
                                    <div class="sub-title">
                                        <strong>Sub title of class</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @for($i=0 ; $i<=4 ; $i++)
                    <div class="col-3 mb-3 swiper-slide">
                        <a href="#4" class="link">
                            <div class="course-box">
                                <div class="content-box">
                                    <div class="icon-course">
                                        <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">tech for kid courses</h4>
                                        <div class="sub-title">
                                            <strong>Sub title of class</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endfor
            </div>
        </section>
    
        <section class="left-sec">
            <div class="row">
                <div class="col-5 center">
                    <div class="content-center">
                        <div class="content-box p-4">
                            <div class="head">
                                <h2 class="title">Our Awesome alumni!</h2>
                                <div class="line-blue"></div>
                            </div>
                            <div class="content-text">
                                <p class="text-body">
                                    Tech for Kids aims to optimize students’ learning and innovation to realize their
                                    potential for the workforce of tomorrow. The future of innovators starts with this
                                    path
                                </p>
                            </div>
                            <div class="btn-box">
                                <a href="#">See More <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="image p-5">
                        <img src="{{url('images/about-image.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="head-sec benefit pt-5">
            <div class="head text-center">
                <h2 class="title">The Benefit for School</h2>
                <div class="line-red-center"></div>
            </div>
            <div class="row py-5">
                @for($i=1; $i<7; $i++)
                <div class="col-4 swiper-slide">
                    <div class="benefit-content text-center">
                        <div class="icon-image">
                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Online Course
                            </h4>
                            <div class="text-body">
                                <p>Sub title of class</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </section>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/program.css')}}">
    <link rel="stylesheet" href="{{mix('css/websites/pages/school.css')}}">
@endpush