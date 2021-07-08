@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Create Job</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('job-opportunities.index') }}">Job</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('job-opportunities.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}

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
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Position Count<span class="note">*</span></label>
                                            <input name="position" value="{{ old('position') }}" type="text"
                                                   class="form-control number @error('position') is-invalid @enderror"
                                                   required>
                                            @error('position')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" data-current=""
                                                   class="form-control datepicker @error('date_from') is-invalid @enderror"
                                                   name="date_from"
                                                   value="{{ old('date_from') }}" >
                                            @error('date_from')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="text" data-current=""
                                                   class="form-control datepicker @error('date_to') is-invalid @enderror"
                                                   name="date_to"
                                                   value="{{ request('date_to') }}" >
                                            @error('date_to')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="text_kh">Description Job<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                       
                                        <textarea
                                                class="form-control editor @error('text_en') is-invalid @enderror"
                                                id="text_en"
                                                name="text_en"
                                                rows="5" required>{{old('text_en')}}</textarea>
                                        @error('text_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="text_kh">Description Job <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea
                                                class="form-control editor "
                                                id="text_kh"
                                                name="text_kh"
                                                rows="5">{{old('text_kh')}}</textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="control-label">Status(Inactive/Active)</div>
                                    <label class="custom-switch mt-2">
                                        <input type="checkbox" name="active" value="1"
                                               class="custom-switch-input"
                                               checked>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Active</span>
                                    </label>
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
                                    <input type="file" name="icon_img"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image "
                                           value="submit" id="icon_img">

                                </div>
                                <div class="text-center mb-4">
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
                            <a href="{{ route('job-opportunities.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection

@include('partials.ckeditor')




