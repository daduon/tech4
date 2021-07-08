@extends('layouts.web')

@section('content')
    <div class="container-fluid" id="school">
        <div class="container">
            <section class="head-sec program">
                <div class="head text-center">
                    <h2 class="title">Tech For Kids Program</h2>
                    <div class="line-red-center"></div>
                </div>
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
                                            Full Computer Science Program
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
                                            After School Program
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
                                            Kid Kathon
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
                                            Camps
                                        </h4>
                                        <div class="sub-title two-line">
                                            <p>Sub title of class</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="head-sec benefit">
                <div class="head text-center">
                    <h2 class="title">The Benefit for School</h2>
                    <div class="line-red-center"></div>
                </div>
                <div class="row pt-5">
                    @for($i=1; $i<7; $i++)
                    <div class="col-4">
                        <div class="benefit-content text-center">
                            <div class="icon-image">
                                <img src="{{url('images/course/benefit.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Online Course
                                </h4>
                                <div class="text-body">
                                    <p>
                                        Kids whose parents are involved in their education get better grades and have higher test scores. 
                                        And the more parents are involved, the more their children seem to benefit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </section>

            <section class="gallery sy-4">
                <div class="head-sec">
                    <div class="head sb-4 text-center">
                        <h2 class="title">The Previous Training </h2>
                        <div class="line-red-center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                       <div class="content-image">
                           <div class="card-image image zoom-in">
                               <a href="{{url('images/gallery/coure.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                   <img src="{{url('images/gallery/coure.jpg')}}" alt="Image Gallery" class="img-fluid">
                                   <p class="text">
                                    A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                               
                           </div>
                       </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/2.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/2.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/1.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/1.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/3.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/3.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/4.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/4.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/5.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/5.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/6.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/6.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/7.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/7.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/8.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/8.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image image zoom-in">
                                <a href="{{url('images/gallery/9.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/9.jpg')}}" alt="Image Gallery" class="img-fluid">
                                    <p class="text">
                                        A card for your favorite person to text; perfect for Valentine's day, anniversaries, birthdays, or just because!
                                    </p>
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
    <link rel="stylesheet" href="{{mix('css/websites/pages/school.css')}}">
@endpush
@push('websites-js')
    <script src="{{mix('/js/websites/pages/parents.js')}}"></script>
@endpush