@extends('layouts.app')
@section('content')
    <div id="program">
        <section class="section">
            <div class="section-header">
                <h1>Create Program</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('programs.index') }}">Program</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('programs.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group mb-0 col-md-12">
                                        <label>Group<span class="note">*</span></label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    @foreach($groups as $group)
                                        <div class="form-group col-md-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="{{ $group->name }}" name="groups[{{ $group->id }}]" {{ isset(old('groups')[$group->id])?'checked':'' }}>
                                                <label class="form-check-label" for="{{ $group->name }}">{{ $group->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title_en">Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ old('title_en') }}" type="text"
                                               class="form-control @error('title_en') is-invalid @enderror" id="title_en"
                                               required>
                                        @error('title_en')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title_kh">Title <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""></label>
                                        <input name="title_kh" value="{{ old('title_kh') }}" type="text" id="title_kh"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="subtitle_en">SubTitle<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                        <input name="subtitle_en" value="{{ old('subtitle_en') }}" type="text"
                                               class="form-control @error('subtitle_en') is-invalid @enderror" id="subtitle_en"
                                               required>
                                        @error('subtitle_en')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subtitle_kh">SubTitle <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="subtitle_kh" value="{{ old('subtitle_kh') }}" type="text" id="subtitle_kh"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="btn_en">Button Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                        <input name="btn_en" value="{{ old('btn_en') }}" type="text" id="btn_en"
                                               class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="btn_en">Button Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""></label>
                                        <input name="btn_kh" value="{{ old('btn_kh') }}" type="text" id="btn_en" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="btn_url_en">Button URL <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                        <input name="btn_url_en" value="{{ old('btn_url_en') }}" type="text" id="btn_url_en" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="btn_url_kh">Button URL <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""></label>
                                        <input name="btn_url_kh" value="{{ old('btn_url_kh') }}" type="text" id="btn_url_kh"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="short_text_en">Short Description<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                    <textarea name="short_text_en" id="short_text_en"
                                              class="form-control editor">{{ old('short_text_en') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="short_text_kh">Short Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""/></label>
                                    <textarea name="short_text_kh" id="short_text_kh" class="form-control editor">{{ old('short_text_kh') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text_en">Description<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                    <textarea name="text_en" id="text_en"
                                              class="form-control editor">{{ old('text_en') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="text_kh">Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""/></label>
                                    <textarea name="text_kh" id="text_kh" class="form-control editor">{{ old('text_kh') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Icon Image</h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="icon"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image"
                                           value="submit" id="icon">
                                    @error('icon')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="text-center mb-4">
                                    <label for="icon"
                                           class="btn btn-info text-white btn-sm mt-2"><i class="fa fa-window-maximize"></i> Browse</label>
                                </div>

                                <div class="form-group text-center mb-1">
                                    <h6>Image<span class="note">*</span></h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="img"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image"
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
                            <a href="{{ route('programs.index') }}" class="btn btn-light"><i
                                        class="fas fa-arrow-left"></i> Back</a>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection
{{--@include('partials.ckeditor')--}}
