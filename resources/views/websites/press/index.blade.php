@extends('layouts.web')

@section('content')
    <div class="container" id="press">
        <div class="head">
            <div class="title text-center">
                <h2>{{ $pressesContent->{'title_'.App::getlocale()} }}</h2>
            </div>
            <div class="sub-title">
                <p>
                    {{ $pressesContent->{'text_'.App::getlocale()} }}
                </p>
            </div>
        </div>
        <div class="body">
            @foreach ($presses as $press)
            <div class="row blog-row">
                <div class="col-4">
                    <a href="{{ route('press-detail', encrypt($press->id)) }}">
                        <div class="image zoom-in">
                            <img src="{{ url($press->thumbnail) }}" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>
                <div class="col-8 content">
                    <a class="title" href="{{ route('press-detail', encrypt($press->id)) }}">
                        <h6>
                            {{ $press->{'title_'.App::getlocale()} }}
                        </h6>
                    </a>
                    <div class="short-des three-line">
                        <p>
                            {!! $press->{'text_'.App::getlocale()} !!}
                        </p>
                    </div>
                    <div class="button">
                        <a href="{{ route('press-detail', encrypt($press->id)) }}" class="bubbly-button">
                            <span class="font">read more</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/blog.css')}}">
@endpush