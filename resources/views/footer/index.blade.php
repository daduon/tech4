@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Footer Content</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('footer.index') }}">Footer</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('footer.update',base64_encode($footer->id)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="card-header title border-bottom">
                        <h5 class="text-white">Content</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Footer Logo </h6>
                                    <p class="note mb-1">(1000px * 1000px)</p>
                                    <img class="img-fluid"
                                         src="{{ $footer->footer_logo ? url($footer->footer_logo) : url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="footer_logo"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image"
                                           value="submit" id="footer_logo">


                                </div>
                                <div class="text-center">
                                    <label for="footer_logo"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>About Text<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="about_text_en" cols="30"
                                                  class="form-control @error('about_text_en') is-invalid @enderror"
                                                  id="about_text_en"
                                                  rows="4">{{ $footer->about_text_en }}</textarea>
                                        @error('about_text_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label>About Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="about_text_kh" cols="30" class="form-control"
                                                  id="about_text_kh"
                                                  rows="4">{{ $footer->about_text_kh }}</textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Text<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="text_en" cols="30"
                                                  class="form-control @error('text_en') is-invalid @enderror"
                                                  id="text_en"
                                                  rows="4">{{ $footer->text_en }}</textarea>
                                        @error('text_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="text_kh" cols="30" class="form-control"
                                                  id="text_kh"
                                                  rows="4">{{ $footer->text_kh }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label>Gradet Text <span class="note">*</span></label>
                                    <input name="gradet_text" value="{{ $footer->gradet_text }}" type="text"
                                           class="form-control @error('title_en') is-invalid @enderror" required>
                                    @error('gradet_text')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-right">
                        <div class="btn-fixed">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> 
                                Update
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


