@extends('layouts.web')
@section('content')
    <section class="courses sy-4">
        <div class="container">
            <div class="head-sec">
                <div class="head sb-4 text-center">
                    <h1 class="title">Tech for kid course</h1>
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
        </div>
    </section>
    <section class="left-sec">
        <div class="container">
            <div class="row">
                <div class="col-5 center">
                    <div class="content-center">
                        <div class="content-box p-4">
                            <div class="head">
                                <h1 class="title">Our Awesome alumni!</h1>
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
                                <a href="#" class="bubbly-button">
                                    <span>See More</span> 
                                    <i class="fal fa-long-arrow-right"></i></a>
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
        </div>
    </section>
    <section class="sb-4" >
        <div class="container">
            <div class="row course-detail msb-4" id="tech-for-kid-course" >
                <div class="col-5 center">
                    <div class="content-center">
                        <div class="image">
                            <img src="{{url('images/course/1.jpg')}}" alt="" class="img-fluid ">
                        </div>
                    </div>
                </div>
                <div class="col-7 center">
                    <div class="content-center">
                        <div class="content-course-detail">
                            <div class="head row">
                                <div class="col-12 p-0">
                                    <h3 class="title">
                                        coding for kid
                                    </h3>
                                </div>
                                <div class="date col-6 p-0">
                                    <i class="far fa-clock"></i>
                                    <span class="from-to">February 1, 2021 - April 25, 2021</span>
                                </div>

                                <div class="date col-6 p-0">
                                    <i class="fal fa-user-friends"></i>
                                    <span class="from-to">7 seats left</span>
                                </div>

                                <div class="location col-12 p-0" data-toggle="modal" data-target="#exampleModalMap">
                                    <i class="fal fa-globe-asia"></i>
                                    <span class="address">Era International School</span>
                                </div>
                            </div>
                            <div class="price">
                                <h5>100$</h5>
                            </div>
                            <div class="detail">
                                <p>Morem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. At vero eos et Morem ipsum dolor sit amet</p>
                            </div>
                            <div class="row list-material">
                                <div class="col-6  mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="required">
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="btn-box" data-toggle="modal" data-target="#exampleModal">
                                        <a href="javascript:void(0);">Join Program<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="btn-box">
                                        <a href="{{ route('course-detail') }}">view detail<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row course-detail msb-4" id="2" >
                <div class="col-5 center">
                    <div class="content-center">
                        <div class="image">
                            <img src="{{url('images/course/1.jpg')}}" alt="" class="img-fluid ">
                        </div>
                    </div>
                </div>
                <div class="col-7 center">
                    <div class="content-center">
                        <div class="content-course-detail">
                            <div class="head">
                                <h3 class="title">
                                    coding for kid
                                </h3>
                                <div class="date">
                                    <i class="far fa-clock"></i>
                                    <span class="from-to">February 1, 2021 - April 25, 2021</span>
                                </div>
                                <div class="location">
                                    <i class="fal fa-globe-asia"></i>
                                    <span class="address">Era International School</span>
                                </div>
                            </div>
                            <div class="price">
                                <h5>100$</h5>
                            </div>
                            <div class="detail">
                                <p>Morem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. At vero eos et Morem ipsum dolor sit amet</p>
                            </div>
                            <div class="row list-material">
                                <div class="col-6  mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="required">
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="btn-box" data-toggle="modal" data-target="#exampleModal">
                                        <a href="javascript:void(0);">Join Program<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="btn-box">
                                        <a href="{{ route('course-detail') }}">view detail<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @for($i = 0 ; $i<=6; $i++)
            <div class="row course-detail msb-4" id="3" >
                <div class="col-5 center">
                    <div class="content-center">
                        <div class="image">
                            <img src="{{url('images/course/1.jpg')}}" alt="" class="img-fluid ">
                        </div>
                    </div>
                </div>
                <div class="col-7 center">
                    <div class="content-center">
                        <div class="content-course-detail">
                            <div class="head">
                                <h3 class="title">
                                    coding for kid
                                </h3>
                                <div class="date">
                                    <i class="far fa-clock"></i>
                                    <span class="from-to">February 1, 2021 - April 25, 2021</span>
                                </div>
                                <div class="location">
                                    <i class="fal fa-globe-asia"></i>
                                    <span class="address">Era International School</span>
                                </div>
                            </div>
                            <div class="price">
                                <h5>100$</h5>
                            </div>
                            <div class="detail">
                                <p>Morem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. At vero eos et Morem ipsum dolor sit amet</p>
                            </div>
                            <div class="row list-material">
                                <div class="col-6  mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="material ">
                                        <div class="icon-material">
                                            <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="content center">
                                            <div class="content-center">
                                                <h6 class="title">Free computer</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="required">
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                                <div class="item-required"><i class="far fa-check-square"></i> Agefrom 6 years to 16 years</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="btn-box" data-toggle="modal" data-target="#exampleModal">
                                        <a href="javascript:void(0);">Join Program<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="btn-box">
                                        <a href="{{ route('course-detail') }}">view detail<i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
    @endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/program.css')}}">
@endpush