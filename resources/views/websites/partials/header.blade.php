<div class="height"></div>
<div class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-3 con-logo ">
                <a href="/">
                    <img src="{{url('images/logo/logo.png')}}" alt="logo" class="img-fluid img-logo"/>
                </a>
            </div>
            <div class="col-6 center-menu">
                <ul class="nav justify-content-center">
                    <li class="nav-item {{ (request()->segment(1) == 'parents') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('parents')}}">Parents</a>
                    </li>
                    <li class="nav-item {{ (request()->segment(1) == 'school') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('school') }}">School</a>
                    </li>
                    <li class="nav-item {{ (request()->segment(1) == 'blog') ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="nav-link resource dropdown-button dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resource
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="{{ route('blog') }}">
                                    <i class="fal fa-award"></i>
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('press') }}">
                                    <i class="fal fa-award"></i>
                                    <span>Press</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('job') }}">
                                    <i class="fal fa-award"></i>
                                    <span>Job Opportunity</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item {{ (request()->segment(1) == 'mini-challenge') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('mini-challenge') }}">Mini Challenge</a>
                    </li>
                    <li class="nav-item {{ (request()->segment(1) == 'social-value-creation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('social-value-creation') }}">Social Value Creation</a>
                    </li>
                    <li class="nav-item {{ (request()->segment(1) == 'contact-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 right-btn text-right">
                <ul class="nav justify-content-center">
                    <li class="language">
                        <a hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                            <img src="{{ url('/images/flag/en.png') }}" alt="English" class="img-fluid">
                        </a>
                        <a hreflang="kh" href="{{ LaravelLocalization::getLocalizedURL('kh', null, [], true) }}">
                            <img src="{{ url('/images/flag/kh.png') }}" alt="Khmer" class="img-fluid">
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown lang">
                        <div class="dropdown-button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ App::getLocale() == 'en' ? url('/images/flag/en.png') : url('/images/flag/kh.png') }}" alt="English" class="img-fluid">
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                    <img src="{{ url('/images/flag/en.png') }}" alt="English" class="img-fluid">
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" hreflang="kh" href="{{ LaravelLocalization::getLocalizedURL('kh', null, [], true) }}">
                                    <img src="{{ url('/images/flag/kh.png') }}" alt="Khmer" class="img-fluid">
                                    <span>Khmer</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    @if(auth()->guard('student')->check())
                        <li class="nav-item icon">
                            <div class="sub-icon">
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalOTP">
                                    <img src="{{ url('/images/header-icon/icon.png') }}" alt="">
                                </a>
                            </div>
                        </li>

                        <li class="nav-item profile">
                            <div class="dropdown-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ url('/images/profile/profile.jpg') }}" alt="English" class="img-fluid">
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a class="dropdown-item" href="{{ route('my-account') }}">
                                        <img src="{{ url('images/profile/icon-01.png') }}" alt="profile" class="img-fluid">
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ url('images/profile/icon-02.png') }}" alt="course" class="img-fluid">
                                        <span>Course</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ url('images/profile/icon-03.png') }}" alt="award" class="img-fluid">
                                        <span>Award</span>
                                    </a>
                                </li>
                                <li>
                                    {{ Form::open(['route' => 'web.logout','class'=>'form-validate','files' => 'true', 'method' => 'post', 'autocomplete' => 'off', 'id'=>'fm-logout']) }}
                                        <button class="logout" type="submit">
                                            Log Out
                                        </button>
                                    {{ Form::close() }}
                                </li>
                            </ul>
                        </li>
                    @else
                        {{-- <li class="nav-item">
                            <button class="text-right bg-whit border-light " data-toggle="modal" data-target="#ModalLogin">
                                <span>Log in</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="text-right bg-whit border-light " data-toggle="modal" data-target="#ModalRegister">
                                <span>Register</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </li> --}}
                        <li class="nav-item dropdown access">
                            <div class="dropdown-button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                                <span>Account</span>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li class="text-center">
                                    <span>Welcome</span>
                                </li>
                                <hr class="py-1">
                                <li class="sign-in px-2 py-1" data-toggle="modal" data-target="#ModalLogin">
                                    <span>Sign in</span>
                                </li>
                                <li class="sign-out px-2 py-1" data-toggle="modal" data-target="#ModalRegister">
                                    <span>Sign out</span>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
