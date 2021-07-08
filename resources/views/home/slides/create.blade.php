@extends('layouts.app')
@section('content')
    <div id="slide">
        <section class="section">
            <div class="section-header">
                <h1>Slide</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('slides.index') }}">Slide</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('slides.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ old('title_en') }}" type="text"
                                               class="form-control @error('title_en') is-invalid @enderror"
                                               required>
                                        @error('title_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="title_kh" value="{{ old('title_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="btn_en" value="{{ old('btn_en') }}" type="text"
                                               class="form-control "
                                              >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="btn_kh" value="{{ old('btn_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="url_btn_en" value="{{ old('url_btn_en') }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Link(URL) <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="url_btn_kh" value="{{ old('url_btn_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>

                                    <div class="form-group ">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="text_en" cols="30" class="form-control" id="text_en"
                                                  rows="3">{{ old('text_en') }}</textarea>
                                    </div>
                                    <div class="form-group ">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="text_kh" cols="30" class="form-control" id="text_kh"
                                                  rows="3">{{ old('text_kh') }}</textarea>
                                    </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Slide Image <span class="note">*</span></h6>
                                    <p class="note mb-1">(1920px * 1000px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image @error('img') is-invalid @enderror"
                                           value="submit" id="img">
                                    @error('img')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <label for="img"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="btn-fixed">
                            <button type="submit" class="btn btn-primary" ><i class="far fa-save"></i> 
                                Create
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


