@extends('layouts.web')

@section('content')
    <div class="container" id="contact-us">
        <div class="head">
            <div class="title">
                <h2>Do not hesitate to get to know tech for kids</h2>
            </div>
            <div class="sub-title">
                <p>Run the first AI course for students and their family to understand and experiment with Al concept in Cambodia </p>
            </div>
        </div>
        <nav class="icon">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ url('images/contact-us/linkedin.png') }}" alt="" class="img-fluid">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ url('images/contact-us/facebook.png') }}" alt="" class="img-fluid">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <img src="{{ url('images/contact-us/instagram.png') }}" alt="" class="img-fluid">
                    </a>
                </li>
              </ul>
        </nav>

        <div class="row py-5 course">
            <div class="col-4 swiper-slide">
                <div class="content-center course-box">
                    <div class="content-box">
                        <div class="icon-course">
                            <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Contact
                            </h4>
                            <div class="sub-title">
                                <h6>+855 12 234 234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 swiper-slide">
                <div class="content-center course-box">
                    <div class="content-box">
                        <div class="icon-course">
                            <img src="{{url('images/my-account/02.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Email
                            </h4>
                            <div class="sub-title">
                                <h6>Techforkids.info@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 swiper-slide">
                <div class="content-center course-box">
                    <div class="content-box">
                        <div class="icon-course">
                            <img src="{{url('images/my-account/03.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Location
                            </h4>
                            <div class="sub-title">
                                <h6>Toul kork II, Phnom Penh Cambodia</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-5 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.9267637464923!2d104.89365801387709!3d11.55710789179469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510892ac2537%3A0x24c21ccdd152dc58!2sStreet%202%2C%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1615258319235!5m2!1sen!2skh" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="form">
            <div class="head-form pb-4">
                <div class="title">
                    <h2>Drop us any message</h2>
                </div>
                <div class="sub-title">
                    <span class="font">Field marked with an * are required</span>
                </div>
            </div>
            <form action="">
                <div class="form-group">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="">
                </div>

                <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="eamil" class="form-control" id="email" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn-submit">
                        <span class="font">Submit</span>
                        <i class="fal fa-long-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/contact-us.css')}}">
@endpush
