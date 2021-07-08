@extends('layouts.app')
@section('content')
    <div id="program">
        <section class="section">
            <div class="section-header">
                <h1>Edit Program</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('programs.index') }}">Program</a></div>
                    <div class="breadcrumb-item"><a>Edit</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('programs.update',base64_encode($program->id)),'class' => 'need-validation','method' => 'put' ,'files' => true ,'autocomplete' => 'off']) }}
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
                                                @php
                                                    $hasProgramGroup = $program->groups->toArray();
                                                    $active = (bool)count(array_filter($hasProgramGroup,function ($hasGroup) use($group){
                                                        return $hasGroup['id'] === $group->id;
                                                    }));
                                                    $checked = $active?'checked':'';
                                                @endphp
                                                <input class="form-check-input" type="checkbox" id="{{ $group->name }}" name="groups[{{ $group->id}}]" {{ isset(old('groups')[$group->id]) ?'checked':$checked }}>
                                                <label class="form-check-label" for="{{ $group->name }}">{{ $group->name }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ $program->title_en }}" type="text"
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
                                        <input name="title_kh" value="{{ $program->title_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>SubTitle<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="subtitle_en" value="{{ $program->sub_title_en }}" type="text"
                                               class="form-control @error('subtitle_en') is-invalid @enderror"
                                               required>
                                        @error('subtitle_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>SubTitle <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="subtitle_kh" value="{{ $program->sub_title_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="btn_en" value="{{ $program->btn_en }}" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="btn_kh" value="{{ $program->btn_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Button URL <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="btn_url_en" value="{{ $program->url_btn_en }}" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button URL <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="btn_url_kh" value="{{ $program->url_btn_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Short Description<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                    <textarea name="short_text_en"
                                              class="form-control editor">{{ $program->short_text_en }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Short Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""></label>
                                    <textarea name="tshort_ext_kh"
                                              class="form-control editor">{{ $program->short_text_kh }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}" alt=""></label>
                                    <textarea name="text_en"
                                              class="form-control editor">{{ $program->text_en }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}" alt=""></label>
                                    <textarea name="text_kh"
                                              class="form-control editor">{{ $program->text_kh }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Icon Image</h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ $program->icon_img ? url($program->icon_img) : url('images/default-image.png') }}"
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
                                         src="{{ $program->img ? url($program->img) : url('images/default-image.png') }}"
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
                            <button type="submit" class="btn btn-primary"><i class="far fa-pen"></i>
                                Update
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
