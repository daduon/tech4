@extends('layouts.app')
@section('content')
    <div id="slide">
        <section class="section">
            <div class="section-header">
                <h1>Home Content</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('home.update',base64_encode($home->id)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="card-header title border-bottom">
                        <h5 class="text-white">About Content</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>About Image </h6>
                                    <p class="note mb-1">(1000px * 1000px)</p>
                                    <img class="img-fluid"
                                         src="{{ $home->about_img ? url($home->about_img) : url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="about_img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image"
                                           value="submit" id="about_img">


                                </div>
                                <div class="text-center">
                                    <label for="about_img"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="about_title_en" value="{{ $home->about_title_en }}" type="text"
                                               class="form-control @error('title_en') is-invalid @enderror" required>
                                        @error('about_title_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="about_title_kh" value="{{ $home->about_title_kh  }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="about_btn_en" value="{{ $home->about_btn_en }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="about_btn_kh" value="{{ $home->about_btn_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="about_url_btn_en" value="{{ $home->about_url_btn_en }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="about_url_btn_kh" value="{{ $home->about_url_btn_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>

                                    <div class="form-group ">
                                        <label>Text<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="about_short_text_en" cols="30"
                                                  class="form-control @error('about_short_text_en') is-invalid @enderror"
                                                  id="about_short_text_en"
                                                  rows="4">{{ $home->about_short_text_en }}</textarea>
                                        @error('about_short_text_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="about_short_text_kh" cols="30" class="form-control"
                                                  id="about_short_text_kh"
                                                  rows="4">{{ $home->about_short_text_kh }}</textarea>
                                    </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-header title border-bottom">
                        <h5 class="text-white">Our Awesome Alumni Content</h5>
                    </div>
                    <div class="row">

                        <div class="col-8">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="alumni_title_en" value="{{ $home->alumni_title_en }}" type="text"
                                               class="form-control @error('alumni_title_en') is-invalid @enderror"
                                               required>
                                        @error('alumni_title_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="alumni_title_kh" value="{{ $home->alumni_title_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="alumni_btn_en" value="{{ $home->alumni_btn_en }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="alumni_btn_kh" value="{{ $home->alumni_btn_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="alumni_url_btn_en" value="{{ $home->alumni_url_btn_en }}"
                                               type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="alumni_url_btn_kh" value="{{ $home->alumni_url_btn_kh }}"
                                               type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                    <div class="form-group ">
                                        <label>Text<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="alumni_short_text_en" cols="30"
                                                  class="form-control @error('alumni_short_text_en') is-invalid @enderror"
                                                  id="alumni_short_text_en"
                                                  rows="4">{{ $home->alumni_short_text_en }}</textarea>
                                        @error('alumni_short_text_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="alumni_short_text_kh" cols="30" class="form-control"
                                                  id="alumni_short_text_kh"
                                                  rows="4">{{ $home->alumni_short_text_kh }}</textarea>
                                    </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Alumni Image</h6>
                                    <p class="note mb-1">(1000px * 1000px)</p>
                                    <img class="img-fluid"
                                         src="{{ $home->alumni_img ? url($home->alumni_img) : url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="alumni_img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image"
                                           value="submit" id="alumni_img">

                                </div>
                                <div class="text-center">
                                    <label for="alumni_img"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="footer" class="card-footer text-right">
                        <div class="btn-fixed">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Update
                            </button>
                            <a href="{{ route('slides.index') }}" class="btn btn-light"><i
                                        class="fas fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection


