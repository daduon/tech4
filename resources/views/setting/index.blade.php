@extends('layouts.app')
@section('content')
    {{ Form::open(['url' => route('settings.update'),'files' => 'true', 'autocomplete' => 'off', 'class' => 'form', 'method' => 'patch']) }}
    <div id="setting">
        <section class="section">
            <div class="section-header">
                <h1>Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/">Home</a></div>
                    <div class="breadcrumb-item"><a>Setting</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">
                                        Name<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="app_name" type="text" class="form-control"
                                               value="{{ old('app_name') ? old('app_name') : $setting['app_name'] }}">
                                        {!!  $errors->has('app_name') ? showError($errors->first('app_name')) : ''  !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">
                                        Phone<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="phone" type="text" class="form-control"
                                               value="{{ old('phone') ? old('phone') : $setting['phone'] }}">
                                        {!!  $errors->has('phone') ? showError($errors->first('phone')) : ''  !!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label>
                                            Address<span class="text-danger">*</span>
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea type="text" class="form-control" cols="30"
                                                  rows="3"
                                                  name="address">{{ old('address') ? old('address') : $setting['address'] }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">
                                        Email<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="email" type="text" class="form-control"
                                               value="{{ old('email') ? old('email') : $setting['email'] }}">
                                        {!!  $errors->has('email') ? showError($errors->first('email')) : ''  !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">
                                        Website<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input name="website" type="text" class="form-control"
                                               value="{{ old('website') ? old('website') : $setting['website'] }}">
                                        {!!  $errors->has('website') ? showError($errors->first('website')) : ''  !!}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">FaceBook URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="fb_url" class="form-control"
                                               value="{{ old('fb_url') ? old('fb_url') : $setting['fb_url'] }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Linkin URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link_url" class="form-control"
                                               value="{{ old('link_url') ? old('link_url') : $setting['link_url'] }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Instagram URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link_url" class="form-control"
                                               value="{{ old('ig_url') ? old('ig_url') : $setting['ig_url'] }}">
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <div class="btn-fixed">
                                        @authorize('general', 'write')
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i> 
                                            Update
                                        </button>
                                        @endauthorize
                                        <a href="{{ route('settings.index') }}" class="btn btn-light"><i
                                                class="fas fa-arrow-left"></i> Back</a>
                                    </div>
 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-head text-center">
                                    <h5>Logo</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <img class="border w-100"
                                                 src="{{ setting('logo') ? url($setting['logo']) : url('images/default-image.jpg') }}"
                                                 alt="Image">
                                            <input type="file" name="logo" accept="image/*"
                                                   class="file-hidden preview-image"
                                                   value="submit" id="logo">
                                            <div class="text-center">
                                                <label for="logo"
                                                       class="btn btn-info text-white btn-sm mt-2"><i
                                                            class="fa fa-window-maximize"></i> Browse</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-head text-center">
                                    <h5>Favicon</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            <img class="border w-100"
                                                 src="{{ setting('favicon') ? url($setting['favicon']) : url('images/default-image.jpg') }}"
                                                 alt="Image">
                                            <input type="file" name="favicon" accept="image/*"
                                                   class="file-hidden preview-image"
                                                   value="submit" id="favicon">
                                            <div class="text-center">
                                                <label for="favicon"
                                                       class="btn btn-info text-white btn-sm mt-2"><i
                                                            class="fa fa-window-maximize"></i> Browse</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{ Form::close() }}
@endsection
