@extends('layouts.web')

@section('content')
    <div class="container" id="press-detail">
        <section class="content-detail container">
            <div class="head">
                <div class="image">
                    <img src="{{ url($blog->thumbnail) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="body">

                <div class="title">
                    <h2>
                        {{ $blog->{'title_'.App::getlocale()} }}
                    </h2>
                </div>
                <div class="row">
                    <div class="col-6 create-by"> Create by : {{ $blog->{'create_by_'.App::getlocale()} }}</div>
                    <div class="col-6 date"></div>
                </div>


                <p>
                    {!! $blog->{'text_'.App::getlocale()} !!}
                </p>
                <div class="image">
                    <img src="{{ url( $blog->content_img ) }}" alt="" class="img-fluid">
                </div>

                <p class="mt-5">
                    {!! $blog->{'description_'.App::getlocale()} !!}
                </p>
                <div class="image">
                    <img src="{{ url( $blog->content_img_2 ) }}" alt="" class="img-fluid">
                </div>
                <div class="card mt-5">
                    {!! $blog->key_description !!}
                </div>
            </div>

        </section>
        <section class="head-sec sy-4 gallery container">
            <div class="head sb-4 text-center">
                <h2 class="title">Our mini chalenge Provious activities</h2>
                <div class="line-red-center"></div>
            </div>

            <div class="row">
                @for($i=1; $i<=6; $i++)
                    <div class="col-4 mb-3">
                        <div class="content-image">
                            <div class="card-image">
                                <a href="{{url('images/gallery/4.jpg')}}" data-fancybox
                                   data-caption="This image has a simple caption">
                                    <img src="{{url('images/gallery/4.jpg')}}" alt="Image Gallery" class="img-fluid">
                                </a>
                            </div>
                            @foreach ($gallerys as $gallery)
                                <div class="col-4 mb-3">
                                    <div class="content-image">
                                        <div class="card-image image zoom-in">
                                            <a href="{{url($gallery->img)}}" data-fancybox
                                               data-caption="This image has a simple caption">
                                                <img src="{{url($gallery->img)}}" alt="Image Gallery" class="img-fluid">
                                                <p class="text">
                                                    A card for your favorite person to text; perfect for Valentine's day,
                                                    anniversaries, birthdays, or just because!
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
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