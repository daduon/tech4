@extends('layouts.web')

@section('content')
    <div class="container" id="course-detail">
        <div class="head">
            <h2 class="title">Course overview</h2>
            <p class="sub-title">
                Run the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                Cambodia
            </p>
            <h2 class="title">Course outline</h2>
            <div class="sub-title">
                <p>Upon completion of this program the students will be able to:</p>
                <ul>
                    @for($li=0; $li<4; $li++)
                    <li>
                        <img src="{{ url('images/course-detail/check-box.png') }}" alt="check-box" class="img-fluid">
                        <span>Upon completion of this program the students will be able to</span>
                    </li>
                    @endfor
                </ul>
            </div>
            <h2 class="title">Course structure</h2>
            <p class="sub-title">
                Upon completion of this program the students will be able to:
            </p>
        </div>
        <div class="body">

            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Benefit of the Course</h3>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Winner achievement</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Eligible Candidacy</h3>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Winner achievement</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Process of the program</h3>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Winner achievement</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                        <li class="py-2">
                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">
                            <span class="font">Packed gift</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Deadline</h3>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Deadline</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li>
                            <div class="title">
                                <img src="{{ url('images/course-detail/clock.png') }}" alt="">
                                <span class="font">validITY</span>
                            </div>
                            <div class="time">
                                <span class="font">
                                    February 1, 2021 - April
                                    25, 2021
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-4"></div>
            </div>

            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Location</h3>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Location</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li>
                            <div class="title">
                                <img src="{{ url('images/course-detail/clock.png') }}" alt="">
                                <span class="font">THE DESK</span>
                            </div>
                            <div class="time">
                                <span class="font">
                                    KHAN DOUN PENH,
                                    Phnom Penh
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li>
                            <div class="title">
                                <img src="{{ url('images/course-detail/clock.png') }}" alt="">
                                <span class="font">THE DESK</span>
                            </div>
                            <div class="time">
                                <span class="font">
                                    KHAN DOUN PENH,
                                    Phnom Penh
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>CLASS CAPACITY</h3>
                    </div>
                    <div class="sub-head py-3">
                        <span class="font pl-3">ONLY 15 STUDENTS EACH CLASS</span>
                    </div>
                </div>
                <div class="col-4 swiper-slide">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Kid Kathon
                                </h4>
                                <div class="sub-title">
                                    <h6>Price</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li>
                            <div class="title">
                                <img src="{{ url('images/course-detail/clock.png') }}" alt="">
                                <span class="font">250 $ / student</span>
                            </div>
                            <div class="time">
                                <span class="font">
                                    All teaching material included
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-4"></div>
            </div>

            <div class="row py-3">
                <div class="col-12">
                    <div class="button">
                        <form action="">
                            <button type="button">
                                <span class="font">Enroll</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                    <div class="contact">
                        <p>Contact : +855 12 234 234</p>
                        <p>Email : techforkid.info@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/course-detail.css')}}">
@endpush
