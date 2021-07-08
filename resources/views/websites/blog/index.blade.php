@extends('layouts.web')

@section('content')
    <div class="container" id="blog">
        <div class="head">
            <div class="title text-center">
                <h2>{{ $blogContent->{'title_'.App::getlocale()} }}</h2>
            </div>
            <div class="sub-title">
                <p>
                    {{ $blogContent->{'text_'.App::getlocale()} }}
                </p>
            </div>
        </div>
        <div class="body">

            @foreach ($blogs as $blog)
            @if ($blog->share_link == "")
            <div class="row blog-row">
                <div class="col-4">
                    <a href="{{ route('blog-detail',encrypt($blog->id)) }}">
                        <div class="image zoom-in">
                            <img src="{{ url($blog->thumbnail) }}" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-8 content">
                    <a class="title" href="{{ route('blog-detail',encrypt($blog->id)) }}">
                        <h6>
                            {{ $blog->{'title_'.App::getlocale()} }}
                        </h6>
                    </a>
                    <div class="short-des five-line">

                            {!! $blog->{'text_'.App::getlocale()} !!}

                    </div>
                    <div class="button">
                        <a href="{{ route('blog-detail',encrypt($blog->id)) }}" class="bubbly-button">
                            <span class="font">read more</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @else
            <div class="row blog-row">
                <div class="col-4">
                    <a href="{{ $blog->share_link }}" target="_blank">
                        <div class="image zoom-in">
                            <img src="{{ url($blog->thumbnail) }}" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-8 content">
                    <a class="title" href="{{ route('blog-detail',encrypt($blog->id)) }}">
                        <h6>
                            {{ $blog->{'title_'.App::getlocale()} }}
                        </h6>
                    </a>
                    <div class="short-des">
                        <p class="three-line">
                            {!! $blog->{'text_'.App::getlocale()} !!}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/blog.css')}}">
@endpush