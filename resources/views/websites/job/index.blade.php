@extends('layouts.web')

@section('content')
    <div class="container" id="job">
        <div class="head">
            <div class="title text-center">
                <h2>{{ $jobContent->{'title_'.App::getlocale()} }}</h2>
            </div>
            <div class="sub-title">
                <p>
                    {!! $jobContent->{'text_'.App::getlocale()} !!}
                </p>
            </div>
        </div>
        <div class="body container">
            <div class="row blog-row">
                @foreach($jobs as $job)
                <div class="col-6">
                    <a href="{{ route('job-detail', encrypt($job->id)) }}">
                        <div class="content-center course-box">
                            <div class="content-box text-center">
                                <div class="icon-course">
                                    <img src="{{url($job->icon_img)}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        {{ $job->{'title_'.App::getlocale()} }}
                                    </h4>
                                    <div class="sub-title">
                                        <span>{{ $job->position }} Position</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/blog.css')}}">
@endpush