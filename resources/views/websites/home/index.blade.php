@extends('layouts.web')
@section('content')
<section>
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="container carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            @foreach($slides as $i => $slide)
            <li data-target="#carousel-example-2" data-slide-to="{{ $i }}" class="{{ $i == '0' ? 'active':'' }}"></li>
            @endforeach
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            @foreach($slides as $i => $slide)
            <div class="carousel-item {{ $i == '0' ? 'active':'' }}">
                <div class="view">
                    <img class="d-block w-100" src="{{ url($slide->img) }}" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="container-slide">
                    <div class="slide-caption ">
                        <h2 class="title-slide">{{ $slide->{'title_'.App::getlocale()} }}</h2>
                        <div class="slide-text">
                            <p class="text-body">
                                {{ $slide->{'text_'.App::getlocale()} }}
                            </p>
                        </div>
                        <div class="btn-slide">
                            <a href="{{ $slide->{'url_btn_'.App::getlocale()} }}">{{ $slide->{'btn_'.App::getlocale()} }}<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <i class="fal fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <i class="fal fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
</section>
    <div class="container">
         {{--    <section class="about bg-img sy-4" style="background-image: url('{{url('images/bg.jpg')}}')">--}}
        <section class="about sy-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="image p-5">
                            <img src="{{ url($home->about_img )}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-6 center">
                        <div class="content-center">
                            <div class="content-box p-4">
                                <div class="head">
                                    <h1 class="title"> {{ $home->{'about_title_'.App::getlocale()} }} </h1>
                                    <div class="line-blue"></div>
                                </div>
                                <div class="content-box">
                                    <p class="content-text">
                                        {{ $home->{'about_short_text_'.App::getlocale()} }}
                                    </p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{ $home->{'about_url_btn_'.App::getlocale()} }}" class="bubbly-button-blue">
                                        <span class="font">{{ $home->{'about_btn_'.App::getlocale()} }}
                                        </span> <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="course-sec left-sec">
            <div class="container">
                <div class="head-sec">
                    <div class="head text-center">
                        <h2 class="title"><q>Stay Curious.Learn Different.</q></h2>
                        <div class="line-blue-center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 center">
                        <div class="content-center">
                            <div class="content-box p-4">
                                <div class="head">
                                    <h1 class="title"> {{ $home->{'alumni_title_'.App::getlocale()} }} </h1>
                                    <div class="line-blue"></div>
                                </div>
                                <div class="content-box">
                                    <p class="content-text">
                                        {{ $home->{'alumni_short_text_'.App::getlocale()} }}
                                    </p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{ $home->{'alumni_url_btn_'.App::getlocale()} }}" class="bubbly-button-green">
                                        <span class="font">{{ $home->{'alumni_btn_'.App::getlocale()} }} </span>
                                        <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="image p-5">
                            <img src="{{ url($home->alumni_img) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why">
            <div class="container">
                <div class="head-sec">
                    <div class="head text-center">
                        <h2 class="title">Why Tech for kid</h2>
                        <div class="line-blue-center"></div>
                    </div>
                </div>
                <div class="row sy-4">
                    @foreach( $why_us as $why)
                    <div class="col-4 swiper-slide center">
                        <div class="content-center course-box">
                            <div class="content-box text-center">
                                <div class="icon-course">
                                    <img src="{{url($why->icon_img)}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        {{ $why->{'title_'.App::getlocale()} }}
                                    </h4>
                                    <div class="sub-title">
                                        {{ $why->{'short_text_'.App::getlocale()} }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mentor sy-4">
            <div class="container">
                <div class="head-sec">
                    <div class="head sb-4 text-center">
                        <h2 class="title">Meet Our Mentor</h2>
                        <div class="line-blue-center"></div>
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper list-mentor ">
                        @foreach($mentors as $i => $mentor)
                        <div class="swiper-slide">
                            <div class="mentor text-center">
                                <a href="#" class="link" data-toggle="modal" data-target="#mentor{{ $i }}">
                                    <div class="image zoom-in">
                                        <img src="{{url($mentor->img)}}" alt="" class="img-fluid b-radius">
                                    </div>
                                </a>

                                <div class="content">
                                    <a href="#" class="link" data-toggle="modal" data-target="#mentor{{ $i }}">
                                        <h4 class="name">{{ $mentor->{'name_'.App::getlocale()} }}</h4>
                                    </a>
                                    <div class="pos">
                                        <strong>{{ $mentor->{'position_'.App::getlocale()} }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @foreach($mentors as $i => $mentor)
                            <div class="modal fade" id="mentor{{ $i }}" role="dialog">
                                <div class="modal-dialog display">
                                    <div class="modal-content b-radius">
                                        <div class="modal-header">

                                            <a href="#" class="close" data-dismiss="modal"><i
                                                        class="fal fa-times"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="image">
                                                        <img src="{{url($mentor->img)}}" alt="" class="img-fluid b-radius">
                                                    </div>
                                                    <h4 class="name">
                                                        {{ $mentor->{'name_'.App::getlocale()} }}
                                                    </h4>
                                                    <div>
                                                        <strong class="pos">
                                                            {{ $mentor->{'position_'.App::getlocale()} }}
                                                        </strong>
                                                        <div class="con-social">
                                                            <ul class="nav">
                                                                <li class="nav-item">
                                                                    <a href="{{ $mentor->fb_url }}" class="nav-link">
                                                                        <i class="fab fa-facebook-square"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ $mentor->ig_url }}" class="nav-link">
                                                                        <i class="fab fa-linkedin"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ $mentor->in_url }}" class="nav-link">
                                                                        <i class="fab fa-instagram"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="content-text">
                                                        <span> <i class="fas fa-quote-left"></i></span>
                                                        <p>
                                                            {{ $mentor->{'text_'.App::getlocale()} }}
                                                        </p>
                                                        <div class="text-right"><i class="fas fa-quote-right"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cus-say sy-4">
            <div class="container">
                <div class="head-sec">
                    <div class="head sb-4 text-center">
                        <h2 class="title">What Everyone say about us</h2>
                        <div class="line-blue-center"></div>
                    </div>
                </div>
                <div class="list-cus-say">
                    <div class="row swiper-wrapper">
                        @foreach( $testimonials as $testimonial)
                        <div class="col swiper-slide b-radius">
                            <div class="testimonial">
                                <div class="group">
                                    <div class="image">
                                        <img src="{{url($testimonial->img)}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h5>{{ $testimonial->{'name_'.App::getlocale()} }}</h5>
                                    </div>
                                    <div class="pos">
                                        <strong>{{ $testimonial->{'say_by_'.App::getlocale()} }}</strong>
                                    </div>
                                </div>

                                <div class="content-text">
                                    <div>
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                <div class="text-body">
                                    <p>
                                        {{ $testimonial->{'text_'.App::getlocale()} }}
                                    </p>
                                </div>
                                    <div class="text-right">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <section class="partner sy-4">
            <div class="container">
                <div class="head-sec">
                    <div class="head sb-4 text-center">
                        <h2 class="title">Our Partnership</h2>
                        <div class="line-blue-center"></div>
                    </div>
                </div>
                <div class="row list-partner ">
                    @foreach ($partners as $partner)
                    <div class="col-2 content-partner mb-3">
                        <div class="image zoom-in">
                            <a href="{{ $partner->url }}" target="_blank">
                                <img src="{{url($partner->img)}}" alt="{{ $partner->{'name'.App::getlocale()} }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="subscribe mb-5">
            <div class="container">
                <div class="card text-center">
                    <h4>Subscribe To Newsletter…</h4>
                    <p>
                        Get Early Access To New Articles, Plugins, Discount Codes
                        And Brief Updates About What's New With Crunchify! Join Over 16 Million Monthly Readers...
                    </p>
                    <form class="mt-3" method="" action="" style="width: 900px;">
                        {{-- <input class="form-control" type="email" placeholder="Email">
                        <button class="btn" type="submit" >Subscribe</button> --}}
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <span class="input-group-btn">
                                <input id="submit" type="submit" class="btn" value="Subscribe">
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

@endsection
@push('websites-css')
    <link href="{{ mix('css/websites/pages/home.css') }}" rel="stylesheet">
@endpush
@push('websites-js')
    <script type="text/javascript" src="{{mix('/js/websites/pages/home.js')}}"></script>
    <script type="text/javascript" src="{{mix('/js/websites/api.js')}}"></script>
    <script type="text/javascript" src="{{mix('/js/websites/auth.js')}}"></script>
@endpush

