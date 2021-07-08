@extends('layouts.web')

@section('content')
{{--    <div class="container" id="social-value-detail">--}}
{{--        <section class="head">--}}
{{--            <div class="container">--}}
{{--                <div class="head-title text-center">--}}
{{--                    <h2>{{ $socialValue->{'title_'.App::getlocale()} }}</h2>--}}
{{--                </div>--}}
{{--                <div class="sub-head-title">--}}
{{--                    <p>--}}
{{--                        Run the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        Cambodia--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="image">--}}
{{--                    <img src="{{ url('images/press/press-detail.png') }}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--    --}}
{{--                <div class="title">--}}
{{--                    <h2>Tech 4kid is the new program in cambodia 2021 - start from 2 Feb</h2>--}}
{{--                </div>--}}
{{--                <div class="clock">--}}
{{--                    <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">--}}
{{--                    <span class="font">February 1, 2021 - Era international school</span>--}}
{{--                </div>--}}
{{--                <div class="sub-title">--}}
{{--                    <p>--}}
{{--                        Run the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in --}}
{{--                        Cambodia--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--    --}}
{{--                <div class="image">--}}
{{--                    <img src="{{ url('images/press/press-detail.png') }}" alt="" class="img-fluid">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="program">--}}
{{--            <div class="container">--}}
{{--                <h2 class="title">Program outline</h2>--}}
{{--            <div class="sub-title">--}}
{{--                <p>Upon completion of this program the students will be able to:</p>--}}
{{--                <ul>--}}
{{--                    @for($li=0; $li<4; $li++)--}}
{{--                    <li>--}}
{{--                        <img src="{{ url('images/course-detail/check-box.png') }}" alt="check-box" class="img-fluid">--}}
{{--                        <span>Upon completion of this program the students will be able to</span>--}}
{{--                    </li>--}}
{{--                    @endfor--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            @for($c=0; $c<3; $c++)--}}
{{--            <div class="row py-3">--}}
{{--                <div class="col-12 pb-4">--}}
{{--                    <div class="head">--}}
{{--                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">--}}
{{--                        <h3>My Rewards</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-4 swiper-slide">--}}
{{--                    <div class="content-center course-box">--}}
{{--                        <div class="content-box">--}}
{{--                            <div class="icon-course">--}}
{{--                                <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                            <div class="content">--}}
{{--                                <h4 class="title">--}}
{{--                                    Kid Kathon--}}
{{--                                </h4>--}}
{{--                                <div class="sub-title">--}}
{{--                                    <h6>Winner achievement</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>       --}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <ul>--}}
{{--                        <li class="py-2">--}}
{{--                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">--}}
{{--                            <span class="font">Packed gift</span>--}}
{{--                        </li>--}}
{{--                        <li class="py-2">--}}
{{--                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">--}}
{{--                            <span class="font">Packed gift</span>--}}
{{--                        </li>--}}
{{--                        <li class="py-2">--}}
{{--                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">--}}
{{--                            <span class="font">Packed gift</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-4">--}}
{{--                    <ul>--}}
{{--                        <li class="py-2">--}}
{{--                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">--}}
{{--                            <span class="font">Packed gift</span>--}}
{{--                        </li>--}}
{{--                        <li class="py-2">--}}
{{--                            <img src="{{ url('images/course-detail/icon-01.png') }}" alt="" class="img-fluid">--}}
{{--                            <span class="font">Packed gift</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endfor--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        --}}
{{--        <section class="gallery sy-4">--}}
{{--            <div class="container">--}}
{{--                <div class="head-sec">--}}
{{--                    <div class="head sy-4 text-center">--}}
{{--                        <h2 class="title">The Previous Training </h2>--}}
{{--                        <div class="line-red-center"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                       <div class="content-image image zoom-in">--}}
{{--                           <div class="card-image">--}}
{{--                               <a href="{{url('images/gallery/coure.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                   <img src="{{url('images/gallery/coure.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                               </a>--}}
{{--                           </div>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/2.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/2.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/1.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/1.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/3.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/3.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/4.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/4.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/5.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/5.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/6.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/6.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/7.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/7.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/8.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/8.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 mb-3">--}}
{{--                        <div class="content-image image zoom-in">--}}
{{--                            <div class="card-image">--}}
{{--                                <a href="{{url('images/gallery/9.jpg')}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                    <img src="{{url('images/gallery/9.jpg')}}" alt="Image Gallery" class="img-fluid">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="related">--}}
{{--            <div class="container">--}}
{{--                <div class="title">--}}
{{--                    <h2>Related program</h2>--}}
{{--                </div>--}}
{{--                <div class="row blog-row">--}}
{{--                    <div class="col-4">--}}
{{--                        <a href="">--}}
{{--                            <div class="image zoom-in">--}}
{{--                                <img src="{{ url('images/blog/1.jpg') }}" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-8 content">--}}
{{--                        <a class="title" href="">--}}
{{--                            <h6 class="one-line">--}}
{{--                                Tech 4kid is the new program in cambodia 2021 - start from 2 Feb--}}
{{--                            </h6>--}}
{{--                        </a>--}}
{{--                        <div class="short-des two-line">--}}
{{--                            <p>--}}
{{--                                Run the first AI course for students and  their family to underst--}}
{{--                                and and experiment with AI concept in Cambodia Run the first --}}
{{--                                AI course for students and  their family to understand and --}}
{{--                                experiment with AIconcept in Cambodia--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="time">--}}
{{--                            <div class="clock">--}}
{{--                                <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">--}}
{{--                                <span class="font">February 1, 2021 - Era International school</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--    --}}
{{--                <div class="row blog-row">--}}
{{--                    <div class="col-4">--}}
{{--                        <a href="">--}}
{{--                            <div class="image zoom-in">--}}
{{--                                <img src="{{ url('images/blog/6.jpg') }}" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-8 content">--}}
{{--                        <a class="title" href="">--}}
{{--                            <h6 class="one-line">--}}
{{--                                Tech 4kid is the new program in cambodia 2021 - start from 2 Feb--}}
{{--                            </h6>--}}
{{--                        </a>--}}
{{--                        <div class="short-des two-line">--}}
{{--                            <p>--}}
{{--                                Run the first AI course for students and  their family to underst--}}
{{--                                and and experiment with AI concept in Cambodia Run the first --}}
{{--                                AI course for students and  their family to understand and --}}
{{--                                experiment with AIconcept in Cambodia--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="time">--}}
{{--                            <div class="clock">--}}
{{--                                <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">--}}
{{--                                <span class="font">February 1, 2021 - Era International school</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
<div class="container" id="social-value-detail">
    <div class="head">
        <div class="title text-center">
            <h2>We are looking for mentor to join us</h2>
        </div>
        <div class="sub-title">
            <p>
                Run the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                Cambodia
            </p>
        </div>
        <div class="image">
            <img src="{{ url('images/blog/5.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>

    <section class="sub-head">
        <div class="title">
            <h2>Tech 4kid is the new program in cambodia 2021 - start from 2 Feb</h2>
        </div>
        <div class="clock">
            <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">
            <span class="font">February 1, 2021 - Era international school</span>
        </div>
        <div class="sub-title">
            <p>
                Run the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                CambodiaRun the first AI course for students and  their family to understand and experiment with AI concept in
                Cambodia
            </p>
        </div>

        <div class="image">
            <img src="{{ url('images/blog/6.jpg') }}" alt="name" class="img-fluid">
        </div>
    </section>

    <section class="program sy-4">
        <h2 class="title">Program outline</h2>
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


            <div class="row py-3">
                <div class="col-12 pb-4">
                    <div class="head">
                        <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                        <h3>Benefit of the program</h3>
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
    </section>

    <section class="head-sec gallery">
        <div class="head text-center">
            <h2 class="title">Capture</h2>
            <div class="line-red-center"></div>
        </div>
        <div class="row py-5">
            @for($i=1; $i<7; $i++)
                <div class="col-4 mb-3">
                    <div class="content-image">
                        <div class="card-image">
                            <a href="{{url('images/gallery/9.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                <img src="{{url('images/gallery/9.jpg')}}" alt="Image Gallery" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <section class="related">
        <div class="title">
            <h2>Related program</h2>
        </div>
        @for($i=1; $i<3; $i++)
            <div class="row blog-row">
                <div class="col-4">
                    <a href="{{ route('social-value-creation-show') }}">
                        <div class="image zoom-in">
                            <img src="{{ url('images/press/01.png') }}" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-8 content">
                    <a class="title" href="{{ route('social-value-creation-show') }}">
                        <h6>
                            Tech 4kid is the new program in cambodia 2021 - start from 2 Feb
                        </h6>
                    </a>
                    <div class="short-des">
                        <p>
                            Run the first AI course for students and  their family to underst
                            and and experiment with AI concept in Cambodia Run the first
                            AI course for students and  their family to understand and
                            experiment with AIconcept in Cambodia
                        </p>
                    </div>
                    <div class="time">
                        <div class="clock">
                            <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">
                            <span class="font">February 1, 2021 - Era International school</span>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </section>
</div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/social-value-creation.css')}}">
@endpush
@push('websites-js')
    <script src="{{mix('/js/websites/pages/parents.js')}}"></script>
@endpush
