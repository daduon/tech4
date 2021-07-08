@extends('layouts.web')

@section('content')
    <div class="container" id="acc">
        <div class="row sub-acc">
            <div class="col-4 p-0">
                <div class="profile">
                    <div class="img">
                        <img src="{{ url('/'.$account->avatar) }}" alt="{{ $account->name }}" class="img-fluid">
                    </div>
                    <div class="name">
                        <h4>{{ $account->name }}</h4>
                    </div>
                    {{ Form::open(['route' => 'web.logout','class'=>'form-validate','files' => 'true', 'method' => 'post', 'autocomplete' => 'off', 'id'=>'fm-logout']) }}
                    <button class="logout" type="submit">
                        <span class="font">Log Out</span>
                        <i class="fal fa-long-arrow-right"></i>
                    </button>
                    {{ Form::close() }}
{{--                    <form action="">--}}
{{--                        <button type="button">--}}
{{--                            <span class="font">Log Out</span>--}}
{{--                            <i class="fal fa-long-arrow-right"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
                </div>
            </div>
            <div class="col-8 cover-info">
                <div class="info">
                    <div class="head">
                        <h4>Edit Your Profile</h4>
                    </div>
                    <div class="form">
                        {{ Form::open(['route' => 'update-my-account','class'=>'form-validate','files' => 'true', 'method' => 'post', 'autocomplete' => 'off', 'id'=>'fm-update-account']) }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="edit_name">Name</label>
                                    <input type="text" name="name" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" id="edit_name" placeholder="Enter your name" value="{{ $account->name }}" required>
                                    {!!  $errors->has('name') ? showError($errors->first('name')) : ''  !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="edit_email">Email</label>
                                    <input type="email" name="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" id="edit_email" placeholder="Enter your email" value="{{ $account->email }}" required>
                                    {!!  $errors->has('email') ? showError($errors->first('email')) : ''  !!}
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="edit_email">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control input-phone {{ $errors->has('phone')?'is-invalid':'' }}" id="edit_email" placeholder="Enter your phone mobile" value="{{ $account->phone }}" required>
                                    {!!  $errors->has('phone') ? showError($errors->first('phone')) : ''  !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="edit_organization">Organization</label>
                                    <input type="text" name="organization" class="form-control {{ $errors->has('organization')?'is-invalid':'' }}" id="edit_organization" placeholder="Enter your name" value="{{ $account->organization }}">
                                    {!!  $errors->has('organization') ? showError($errors->first('organization')) : ''  !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="edit_position">Position</label>
                                    <input type="text" name="position" class="form-control {{ $errors->has('position')?'is-invalid':'' }}" id="edit_position" placeholder="Enter your name" value="{{ $account->position }}">
                                    {!!  $errors->has('position') ? showError($errors->first('position')) : ''  !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="edit_password">Password</label>
                                    <input type="password" name="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" id="edit_password" placeholder="Enter your password">
                                    {!!  $errors->has('password') ? showError($errors->first('password')) : ''  !!}
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="edit_password">Confirm Password</label>
                                    <input type="password" name="password_confirmation {{ $errors->has('password_confirmation')?'is-invalid':'' }}" class="form-control" id="edit_password" placeholder="Enter your confirm password">
                                    {!!  $errors->has('password_confirmation') ? showError($errors->first('password_confirmation')) : ''  !!}
                                </div>
                            </div>
                            <button type="submit" class="update text-right">
                                <span class="font">Update</span>
                                <i class="fal fa-long-arrow-right"></i>
                            </button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-4 rewards">
            <div class="col-12">
                <div class="row header mb-4">
                    <div class="col-6">
                        <div class="head">
                            <img src="{{ url('/images/profile/reward.png') }}" alt="" class="img-fluid">
                            <h3>My Rewards</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box" data-toggle="modal" data-target="#exampleModalPayment">
                            <h5> 5 Courses Enrolled</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 swiper-slide">
                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalRewads">
                    <div class="content-center course-box">
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
                </a>
            </div>

            <div class="col-4 swiper-slide">
                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalRewads" >
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/02.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Stem It yourself
                                </h4>
                                <div class="sub-title">
                                    <h6>4 courses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-4 swiper-slide">
                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalRewads">
                    <div class="content-center course-box">
                        <div class="content-box">
                            <div class="icon-course">
                                <img src="{{url('images/my-account/03.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    Stem Mini
                                </h4>
                                <div class="sub-title">
                                    <h6>5 courses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row pt-4 rewards">
            <div class="col-12">
                <div class="row header mb-4">
                    <div class="col-12">
                        <div class="head">
                            <img src="{{ url('/images/profile/course.png') }}" alt="" class="img-fluid">
                            <h3>My Rewards</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 swiper-slide">
                <div class="content-center course-box">
                    <div class="content-box">
                        <div class="icon-course">
                            <img src="{{url('images/my-account/01.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                Kid Kathon
                            </h4>
                            <div class="sub-title mb-4">
                                <h6>Kid Kathon Sub Title</h6>
                            </div>
                            <div class="button">
                                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalCourse">
                                    <span>Re-enroll </span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
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
                                Stem It yourself
                            </h4>
                            <div class="sub-title mb-4">
                                <h6>Stem It yourself Sub Title</h6>
                            </div>
                            <div class="button">
                                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalCourse">
                                    <span>Re-enroll </span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
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
                                Stem Mini
                            </h4>
                            <div class="sub-title mb-4">
                                <h6>Stem Mini Sub Title</h6>
                            </div>
                            <div class="button">
                                <a href="javescript:void(0);" data-toggle="modal" data-target="#exampleModalCourse">
                                    <span>Re-enroll </span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('websites-css')
    <link rel="stylesheet" href="{{mix('css/websites/pages/user-account.css')}}">
@endpush
