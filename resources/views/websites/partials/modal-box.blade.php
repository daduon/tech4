<!-- Modal School-->
<div class="modal modal-custom fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Welcome to Tech for Kids Cambodia</h6>
                </div>
                <div class="line-red my-3"></div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">
                            <img src="{{ url('images/social-media/google.png') }}" alt="" class="img-fluid">
                            <span>Log in with Google</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <img src="{{ url('images/social-media/facebook.png') }}" alt="" class="img-fluid">
                            <span>Log in with Facebook</span>
                        </a>
                    </li>
                </ul>

                <div class="or">
                    <h6>Or</h6>
                </div>

                <div class="form">
                    {{ Form::open(['route' => 'api.login','class'=>'form-validate','files' => 'true', 'method' => 'post', 'autocomplete' => 'off', 'id'=>'fm-login']) }}
                    <div class="form-group">
                        <label for="login_phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control input-phone phone" id="login_phone" placeholder="Enter your phone number" required>
                        <label id="login_phone-error" class="error" for="login_phone" style="display: none">This field phone number is required.</label>
                        <span class="invalid-feedback" role="alert">
                            <strong class="login_phone_error"></strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="login_password">Password</label>
                        <input type="password" name="password" class="form-control password" id="login_password" placeholder="Enter your Password" required>
                        <label id="login_password-error" class="error" for="login_password" style="display: none">This field phone number is required.</label>
                        <span class="invalid-feedback" role="alert">
                                <strong class="login_password_error"></strong>
                            </span>
                    </div>
                    <input type="hidden" name="current_url" value="{{ url()->current() }}">
                    <div class="login register text-center">
                        <button type="submit" class="btn-login">
                            <span>Login</span>
                            <i class="fal fa-long-arrow-right"></i>
                        </button>
                    </div>
                    <a href="{{route('web.password.request')}}">Foget</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal register-->
<div class="modal modal-custom fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Welcome to Tech for Kids Cambodia</h6>
                </div>
                <div class="line-red my-3"></div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">
                            <img src="{{ url('images/social-media/google.png') }}" alt="" class="img-fluid">
                            <span>Log in with Google</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">
                            <img src="{{ url('images/social-media/facebook.png') }}" alt="" class="img-fluid">
                            <span>Log in with Facebook</span>
                        </a>
                    </li>
                </ul>

                <div class="or">
                    <h6>Or</h6>
                </div>

                <div class="form">
                    {{ Form::open(['route' => 'api.register','class'=>'form-validate','files' => 'true', 'method' => 'post', 'autocomplete' => 'off', 'id'=>'fm-register']) }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control name" id="name" aria-describedby="nameHelp" placeholder="Enter your name" required>
                            <label id="name-error" class="error" for="name" style="display: none">This field name is required.</label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="email_error"></strong>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control email" id="email" placeholder="Enter your email" required>
                            <label id="email-error" class="error" for="email" style="display: none">This field email is required.</label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="email_error"></strong>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" name="phone" class="form-control input-phone phone" id="phone" placeholder="Enter your phone number" required>
                            <label id="phone-error" class="error" for="phone" style="display: none">This field phone number is required.</label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="phone_error"></strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="organization">Organization</label>
                            <input type="text" name="organization" class="form-control organization" id="organization" placeholder="Enter your organization"/>
                            <label id="organization-error" class="error" for="organization" style="display: none"></label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="organization_error"></strong>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="organization">Position</label>
                            <input type="text" name="position" class="form-control position" id="position" aria-describedby="nameHelp" placeholder="Enter your position"/>
                            <label id="position-error" class="error" for="position" style="display: none"></label>
                            <span class="invalid-feedback" role="alert">
                                    <strong class="organization_error"></strong>
                                </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control password" id="password" placeholder="Enter your Password" required>
                            <label id="password-error" class="error" for="password" style="display: none">This field phone number is required.</label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="password_error"></strong>
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control password_confirmation" id="password_confirmation" placeholder="Enter your Confirm Password" required>
                            <label id="password_confirmation-error" class="error" for="password_confirmation" style="display: none">This field confirm password is required.</label>
                            <span class="invalid-feedback" role="alert">
                                <strong class="password_confirmation_error"></strong>
                            </span>
                        </div>
                        <input type="hidden" name="current_url" value="{{ url()->current() }}">
                        <div class="register text-center">
                            <button type="submit" class="btn-register">
                                <span>Register</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal OTP-->
<div class="modal modal-custom modal-otp fade" id="exampleModalOTP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>OTP code sent !</h6>
                </div>

                <div class="sub-header">
                    <p>
                        Enter your OTP code we have sent via SMS to your phone number +855 ******56
                    </p>
                </div>


                <div class="form">
                    <form>
                        <div class="d-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" aria-describedby="nameHelp" placeholder="" maxlength="1">
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" maxlength="1">
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="" maxlength="1">
                              </div>

                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="" maxlength="1">
                              </div>
                        </div>
                        <div class="time-send">
                            <div class="loading">
                                <img src="" alt="">
                                <span class="font">(00:03)</span>
                            </div>
                            <div class="resend py-3">
                                Don’t receive a code? <span>Resend</span>
                            </div>
                        </div>
                        <div class="Continue register text-center">
                            <button type="submit" class="btn-slide bubbly-button-green">
                                <span>Continue</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-map fade" id="exampleModalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.120157739066!2d104.87404641410065!3d11.543237391804002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109504cf48598a5%3A0xec66f41aeabefe07!2sPhum%20Trea%2C%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1612246655561!5m2!1sen!2skh" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal Account-->
<div class="modal modal-custom fade" id="exampleModalRewads" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Redeem your rewards</h6>
                </div>
                <div class="line-red my-3"></div>
                <div class="row">
                    <div class="col-6">
                        <div class="content-center course-box bg-green">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Kid Kathon
                                    </h4>
                                    <div class="sub-title">
                                        <h6>2 courses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="content-center course-box bg-green">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/my-account/clock.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        validITY
                                    </h4>
                                    <div class="sub-title">
                                        <h6>February 1, 2021 - April 25, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-header">
                    <h6>Terms and conditions</h6>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                </ul>
                <div class="button">
                    <a href="javescript:void(0);">
                        <span class="font">Redeem</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-custom fade" id="exampleModalCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Redeem your rewards</h6>
                </div>
                <div class="line-red my-3"></div>
                <div class="row">
                    <div class="col-6">
                        <div class="content-center course-box bg-green">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Kid Kathon
                                    </h4>
                                    <div class="sub-title">
                                        <h6>2 courses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="content-center course-box bg-green">
                            <div class="content-box">
                                <div class="icon-course">
                                    <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Kid Kathon
                                    </h4>
                                    <div class="sub-title">
                                        <h6>2 courses</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-header">
                    <h6>Terms and conditions</h6>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                    <li class="list-group-item">
                        <img src="{{ url('images/my-account/check-box.png') }}" alt="">
                        Agefrom 6 years to 16 years
                    </li>
                </ul>
                <div class="button">
                    <a href="javescript:void(0);">
                        <span class="font">Redeem</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal upload CV-->
<div class="modal modal-custom fade" id="exampleModalUploadCv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Welcome to Tech for Kids Cambodia</h6>
                </div>
                <div class="line-red my-3"></div>


                <div class="form">
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
                            <label for="exampleFormControlFile1">Browse your CV</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" style="box-shadow: unset; border-radius: 0">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn-submit">
                                <span class="font">Upload</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Payment-->
<div class="modal modal-custom fade" id="exampleModalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content container">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header">
                    <h6>Course Details</h6>
                </div>
                <div class="line-red my-3"></div>

                <div class="blog row">
                    <div class="col-3">
                        <div class="img">
                            <img src="{{ url('images/payment/cours-img.png') }}" alt="course" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-9">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <h6>Computer Science Fundamental: 100$</h6>
                            </li>
                            <li class="nav-item">
                                <span class="font">Instructor: Bonpagna Kann</span>
                            </li>
                            <li class="nav-item">
                                <span class="font">Capacity: 10 Students</span>
                            </li>
                            <li class="nav-item">
                                <span class="font">Duration: 45 Hours</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pay-method">
                    <div class="title">
                        <h6>Peyment Method</h6>
                    </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ url('images/payment/ppay.png') }}" alt="" class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ url('images/payment/money.png') }}" alt="" class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ url('images/payment/truemoney.png') }}" alt="" class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="{{ url('images/payment/aba.png') }}" alt="" class="img-fluid">
                            </a>
                        </li>
                    </ul>

                    <div class="form">
                        <form action="">
                            <div class="register text-center">
                                <button type="submit" class="btn-slide">
                                    <span class="font">Enroll</span>
                                    <i class="fal fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
