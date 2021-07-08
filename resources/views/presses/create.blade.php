@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Press Detail</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('presses.index') }}">Presses</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('presses.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
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
                                        <label>Create By <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="create_by_en" value="{{ old('create_by_en') }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Create By <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="create_by_kh" value="{{ old('create_by_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="text_kh">Articles<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        
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
                                        <label for="text_kh">Articles <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea
                                                class="form-control editor "
                                                id="text_kh"
                                                name="text_kh"
                                                rows="5">{{old('text_kh')}}</textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gallery Image<span
                                                class="note">*</span></label>
                                </div>
                                <div class="row" id="show-images">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="box-image">
                                                <label for="gallery">
                                                    <img class="w-100" style="cursor:pointer;"
                                                         src="{{ url('images/gallery/file-upload.png') }}"
                                                         alt="Image">
                                                </label>
                                            </div>
                                            <input type="file" name="img[]"
                                                   accept=".png , .jpg , .jpeg" multiple
                                                   id="gallery"
                                                   class="file-hidden-custom d-none multiple-upload"
                                                   style='display: none;'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Thumbnail <span class="note">*</span></h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="thumbnail"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image @error('thumbnail') is-invalid @enderror"
                                           value="submit" id="thumbnail">
                                    @error('thumbnail')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror

                                </div>
                                <div class="text-center mb-4">
                                    <label for="thumbnail"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>

                                <div class="form-group text-center mb-1">
                                    <h6>Content Image</h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="content_img"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image"
                                           value="submit" id="content_img">
                                </div>
                                <div class="text-center">
                                    <label for="content_img"
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
                            <a href="{{ route('presses.index') }}" class="btn btn-light"><i
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




