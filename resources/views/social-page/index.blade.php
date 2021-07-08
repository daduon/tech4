@extends('layouts.app')
@section('content')
<div>
    <section class="section">
        <div class="section-header">
            <h1>Social Value Page</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('social-page.index') }}">Social Page</a></div>
            </div>
        </div>
        <div class="section-body">
            {{ Form::open(['url' => route('social-page.update',base64_encode($socialPage->id)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
            <div class="card">
                <div class="card-header title border-bottom">
                    <h5 class="text-white">Social Value Overview Content </h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                            <input name="title_en" value="{{ $socialPage->title_en }}" type="text"
                                   class="form-control @error('title_en') is-invalid @enderror" required>
                            @error('title_en')
                            <div class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Title <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                            <input name="title_kh" value="{{ $socialPage->title_kh  }}" type="text"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label>Text<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                            <textarea name="text_en" cols="30"
                                      class="form-control @error('text_en') is-invalid @enderror"
                                      id="text_en"
                                      rows="4">{{ $socialPage->text_en }}</textarea>
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
                                      rows="4">{{ $socialPage->text_kh }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Update
                    </button>
                    <a href="{{ route('slides.index') }}" class="btn btn-light"><i
                                class="fas fa-arrow-left"></i> Back</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection


