@extends('layouts.web')

@section('content')
    <div class="container" id="social-value">
        <div class="head">
            <div class="title text-center">
                <h2>{{ $socialContent->{'title_'.App::getlocale()} }}</h2>
            </div>
            <div class="sub-title">
                <p>
                    {!! $socialContent->{'text_'.App::getlocale()} !!}
                </p>
            </div>
        </div>
        <div class="body">
            <div class="body">
{{--                @foreach ($socialValues as $socialValue)--}}
{{--                <div class="row blog-row">--}}
{{--                    <div class="col-4">--}}
{{--                        <a href="{{ url('/social-value-creation/show/' . encrypt($socialValue->id))  }}">--}}
{{--                            <div class="image zoom-in">--}}
{{--                                <img src="{{ url($socialValue->thumbnail) }}" alt="" class="img-fluid">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-8 content">--}}
{{--                        <a class="title" href="{{ url('/social-value-creation/show/' . encrypt($socialValue->id))  }}">--}}
{{--                            <h6>--}}
{{--                                {{ $socialValue->{'title_'.App::getlocale()} }}--}}
{{--                            </h6>--}}
{{--                        </a>--}}
{{--                        <div class="short-des three-line">--}}
{{--                            <p>--}}
{{--                                {!! $socialValue->{'text_'.App::getlocale()} !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="button">--}}
{{--                            <a href="{{ url('/social-value-creation/show/' . encrypt($socialValue->id))  }}">--}}
{{--                                <span class="font">read more</span>--}}
{{--                                <i class="fal fa-long-arrow-right"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
                <div class="body">
                    <div class="body">
                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/3.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/2.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/1.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/4.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/5.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row blog-row">
                            <div class="col-4">
                                <a href="{{ route('social-value-creation-show') }}">
                                    <div class="image zoom-in">
                                        <img src="{{ url('images/blog/6.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <div class="col-8 content">
                                <a class="title" href="{{ route('social-value-creation-show') }}">
                                    <h6>
                                        social value creation title
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
                                <div class="button">
                                    <a href="{{ route('social-value-creation-show') }}">
                                        <span class="font">read more</span>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/social-value-creation.css')}}">
@endpush