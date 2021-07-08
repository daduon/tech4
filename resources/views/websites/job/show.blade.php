@extends('layouts.web')

@section('content')
    <div class="container" id="job">
        <div class="head">
            <div class="title text-center">
                <h2>{{ $job->{'title_'.App::getlocale()} }}</h2>
            </div>
        </div>
        <div class="body">
            
            <p>
                {!! $job->{'text_'.App::getlocale()} !!}
            </p>

            <div class="email">
                Email: <span>techforkid@gmail.com</span>
            </div>

            <div class="upload-cv">
                <button type="button" data-toggle="modal" data-target="#exampleModalUploadCv">
                    <span class="font">Upload Your CV</span>
                    <i class="fal fa-long-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/blog.css')}}">
@endpush