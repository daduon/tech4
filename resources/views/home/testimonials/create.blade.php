@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Testimonial</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonial</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('testimonials.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="name_en" value="{{ old('name_en') }}" type="text"
                                               class="form-control @error('name_en') is-invalid @enderror"
                                               required>
                                        @error('name_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="name_kh" value="{{ old('name_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Position<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="say_by_en" value="{{ old('say_by_en') }}" type="text"
                                               class="form-control @error('say_by_en') is-invalid @enderror"
                                               required>
                                        @error('say_by_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Position <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="say_by_kh" value="{{ old('say_by_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Description<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="text_en" cols="30"
                                                  class="form-control @error('text_en') is-invalid @enderror"
                                                  id="text_en"
                                                  rows="4" required>{{ old('text_en') }}</textarea>
                                        @error('text_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="text_kh" cols="30" class="form-control" id="text_kh"
                                                  rows="4">{{ old('text_kh') }}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Profile Image <span class="note">*</span></h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image "
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
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> 
                                Create
                            </button>
                            <a href="{{ route('testimonials.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a> 
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection


