@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Benefit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('benefits.index') }}">Benefit</a></div>
                    <div class="breadcrumb-item"><a>Edit</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('benefits.update',base64_encode($benefits->id)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-check form-group ml-4">
                                        @foreach($groups as  $group)
                                            <input class="form-check-input " type="radio"
                                                   {{ $benefits->group_id == $group->id ? 'checked' : '' }} name="group_id"

                                                   value="{{ base64_encode($group->id) }}" id="{{ $group->name }}">
                                            <label class="form-check-label mr-5" for="{{ $group->name }}">
                                                {{ $group->name }}
                                            </label>
                                        @endforeach
                                        @error('group_id')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ $benefits->title_en }}" type="text"
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
                                        <input name="title_kh" value="{{ $benefits->title_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="text_en" cols="30" class="form-control" id="text_en"
                                                  rows="4">{{ $benefits->text_en }}</textarea>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="text_kh" cols="30" class="form-control" id="text_kh"
                                                  rows="4">{{ $benefits->kh_en }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Icon Image </h6>
                                    <p class="note mb-1">(500px * 500px)</p>
                                    <img class="img-fluid"
                                         src="{{ $benefits->icon_img ? url($benefits->icon_img) : url('images/why-us/why-us.png') }}"
                                         alt="Image">
                                    <input type="file" name="icon_img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image "
                                           value="submit" id="icon_img">
                                </div>
                                <div class="text-center">
                                    <label for="icon_img"
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
                            <a href="{{ route('benefits.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection


