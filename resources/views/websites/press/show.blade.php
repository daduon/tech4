@extends('layouts.web')

@section('content')
    <div class="container" id="press-detail">
        <section class="content-detail container">
            <div class="head">
                <div class="image">
                    <img src="{{ url($press->thumbnail) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="body">

                <div class="title">
                    <h2>
                        {{ $press->{'title_'.App::getlocale()} }}
                    </h2>
                </div>
                <div class="time row">
                    <div class="col-6">
                        <div class="name">
                            <img src="{{ url('images/press/name.png') }}" alt="name" class="img-fluid">
                            <span class="font">Koh sotipheab</span>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="clock">
                            <img src="{{ url('images/press/clock.png') }}" alt="name" class="img-fluid">
                            <span class="font">February 1, 2021</span>
                        </div>
                    </div>
                </div>
    
                    
                <p>
                    {!! $press->{'text_'.App::getlocale()} !!}
                </p>
            </div>
            <div class="image">
                <img src="{{ url($press->content_img) }}" alt="" class="img-fluid">
            </div>
        </section>
        <section class="head-sec sy-4 gallery container">
            <div class="head sb-4 text-center">
                <h2 class="title">Our mini chalenge Provious activities</h2>
                <div class="line-red-center"></div>
            </div>
{{--            <div class="row">--}}
{{--                @foreach ($gallerys as $gallery)--}}
{{--                <div class="col-4 mb-3">--}}
{{--                    <div class="content-image">--}}
{{--                        <div class="card-image image zoom-in">--}}
{{--                            <a href="{{url($gallery->img)}}" data-fancybox data-caption="This image has a simple caption">--}}
{{--                                <img src="{{url($gallery->img)}}" alt="Image Gallery" class="img-fluid">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
            <div class="row">
                @for($i=1; $i<=6; $i++)
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image">
                                <a href="{{url('images/gallery/4.jpg')}}" data-fancybox data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/4.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/blog.css')}}">
@endpush