@extends('layouts.web')

@section('content')
    <div class="container-fluid" id="mini-challenge">
        <div class="container">
            <section class="head-sec program">
                <div class="head text-center">
                    <h2 class="title">Our mini challenge</h2>
                    <div class="sub-title">
                        <p>
                            Run the first AI course for students and  their family to understand and experiment with AI concept in
                            Cambodia
                        </p>
                    </div>
                </div>
{{--                <div class="row activity">--}}
{{--                    <div class="col-3 swiper-slide">--}}
{{--                        <a href="{{ route('mini-challenge_kathon') }}">--}}
{{--                            <div class="content-center course-box">--}}
{{--                                <div class="content-box">--}}
{{--                                    <div class="icon-course">--}}
{{--                                        <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h4 class="title two-line">--}}
{{--                                            Kid Kathon--}}
{{--                                        </h4>--}}
{{--                                        <div class="sub-title">--}}
{{--                                            <span class="font">Kid kathon sub title</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--        --}}
{{--                    <div class="col-3 swiper-slide">--}}
{{--                        <a href="{{ route('mini-challenge_kathon') }}">--}}
{{--                            <div class="content-center course-box">--}}
{{--                                <div class="content-box">--}}
{{--                                    <div class="icon-course">--}}
{{--                                        <img src="{{url('images/my-account/02.png')}}" alt="" class="img-fluid">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h4 class="title two-line">--}}
{{--                                            Stem It yourself--}}
{{--                                        </h4>--}}
{{--                                        <div class="sub-title">--}}
{{--                                            <span class="font">Stem it yourself sub title</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>                     --}}
{{--                    </div>--}}
{{--        --}}
{{--                    <div class="col-3 swiper-slide">--}}
{{--                        <a href="{{ route('mini-challenge_kathon') }}">--}}
{{--                            <div class="content-center course-box">--}}
{{--                                <div class="content-box">--}}
{{--                                    <div class="icon-course">--}}
{{--                                        <img src="{{url('images/my-account/03.png')}}" alt="" class="img-fluid">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <h4 class="title two-line">--}}
{{--                                            Stem Mini--}}
{{--                                        </h4>--}}
{{--                                        <div class="sub-title">--}}
{{--                                            <span class="font">Stem mini sub title</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="col-3 swiper-slide">--}}
{{--                        --}}{{-- <div class="content-center course-box">--}}
{{--                            <div class="content-box">--}}
{{--                                <div class="icon-course">--}}
{{--                                    <img src="{{url('images/my-account/03.png')}}" alt="" class="img-fluid">--}}
{{--                                </div>--}}
{{--                                <div class="content">--}}
{{--                                    <h4 class="title">--}}
{{--                                        Stem Mini--}}
{{--                                    </h4>--}}
{{--                                    <div class="sub-title">--}}
{{--                                        <h6>Stem mini sub title</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> --}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row pt-5">
                    <div class="col-3 swiper-slide">
                        <a href="{{ route('list-courses') }}">
                            <div class="content-center course-box">
                                <div class="content-box">
                                    <div class="icon-course">
                                        <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <h4 class="title one-line">
                                           Kid kathon
                                        </h4>
                                        <div class="sub-title two-line">
                                            <strong>Short Description about  Full Computer Science Program here</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-3 swiper-slide">
                        <a href="{{ route('list-courses') }}">
                            <div class="content-center course-box">
                                <div class="content-box">
                                    <div class="icon-course">
                                        <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <h4 class="title one-line">
                                            Stem it yourselft
                                        </h4>
                                        <div class="sub-title two-line">
                                            <strong>Short Description about  Full Computer Science Program here</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3 swiper-slide">
                        <a href="{{ route('list-courses') }}">
                            <div class="content-center course-box">
                                <div class="content-box">
                                    <div class="icon-course">
                                        <img src="{{url('images/course/course-1.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="content">
                                        <h4 class="title one-line">
                                            Stem Mini
                                        </h4>
                                        <div class="sub-title two-line">
                                            <strong>Short Description about  Full Computer Science Program here</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </section>

            <section class="benefit sy-4">
                <div class="head-sec">
                    <div class="head sb-4 text-center">
                        <h2 class="title">The benefit for parents</h2>
                        <div class="line-red-center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="benefit-content text-center">
                            <div class="icon-image">
                                <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">Higher grades</h4>
                                <div class="text-body">
                                    <p> Kids whose parents are involved in their education get better grades and have higher
                                        test scores. And the more parents are involved, the more their children seem to
                                        benefit. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="benefit-content text-center">
                            <div class="icon-image">
                                <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">Better behavior </h4>
                                <div class="text-body">
                                    <p>Kids develop better social skills and show improved behavior when their parents are
                                        involved at school. Studies have also shown that kids are less likely to skip
                                        school.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @for($i=0 ; $i<=3; $i++)
                        <div class="col-4">
                            <div class="benefit-content text-center">
                                <div class="icon-image">
                                    <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title"> Improved education</h4>
                                    <div class="text-body">
                                        <p>Research shows that parent involvement can help improve the quality of schools
                                            improve a school’s reputation in the community. Involved parents
                                            gain the respect of teachers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <section class="head-sec gallery">
                <div class="head sb-4 text-center">
                    <h2 class="title">Our mini chalenge Provious activities</h2>
                    <div class="line-red-center"></div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                       <div class="content-image">
                           <div class="card-image image zoom-in">
                               <a href="{{url('images/gallery/coure.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                   <img src="{{url('images/gallery/coure.jpg')}}" alt="Image Gallery" class="img-fluid">
                               </a>
                           </div>
                       </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/2.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/2.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/1.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/1.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/3.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/3.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/4.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/4.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/5.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/5.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/6.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/6.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/7.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/7.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/8.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/8.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/9.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/9.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/mini-challenge.css')}}">
    <link rel="stylesheet" href="{{mix('css/websites/pages/program.css')}}">
@endpush
@push('websites-js')
    <script src="{{mix('/js/websites/pages/parents.js')}}"></script>
@endpush
