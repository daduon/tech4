@extends('layouts.app')
@section('content')
    <div id="blog">
        <section class="section">
            <div class="section-header">
                <h1>Blog Edit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></div>
                    <div class="breadcrumb-item"><a>Edit</a></div>
                </div>
            </div>

            <div class="section-body">
                {{ Form::open(['url' => route('blogs.update',base64_encode($blogs->id)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ $blogs->title_en }}" type="text"
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
                                        <input name="title_kh" value="{{ $blogs->title_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Create By <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="create_by_en" value="{{ $blogs->create_by_en }}" type="text"
                                               class="form-control "
                                        >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Create By <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="create_by_kh" value="{{ $blogs->create_by_kh }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="text_en">Articles<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        
                                        <textarea
                                                class="form-control editor @error('text_en') is-invalid @enderror"
                                                id="text_en"
                                                name="text_en"
                                                rows="5" required>{{ $blogs->text_en }}</textarea>
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
                                                rows="5">{{  $blogs->text_kh }}</textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="choose_option" class="form-label">Choose Option</label>
                                    <select class="form-control" id="choose_option" name="choose_option" >
                                        <option value="1" {{ $blogs->choose_option===1?'selected':'' }} >Defaulf</option>
                                        <option value="2" {{ $blogs->choose_option===2?'selected':'' }} >Share Link</option>
                                    </select>
                                </div>

                                <div class="form-row option_1">
                                    <div class="form-group col-md-12">
                                        <label>Link<img class="img-flag"></label>
                                        <input name="share_link" value="{{ $blogs->share_link }}" type="url"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="option_2">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="description_en">Articles 2<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                            
                                            <textarea
                                                    class="form-control editor @error('description_en') is-invalid @enderror"
                                                    id="description_en"
                                                    name="description_en"
                                                    rows="5" required>{{ $blogs->description_en }}</textarea>
                                            @error('description_en')
                                            <div class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description_kh">Articles 2 <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                            <textarea
                                                    class="form-control editor "
                                                    id="description_kh"
                                                    name="description_kh"
                                                    rows="5">{{  $blogs->description_kh }}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="key_description">Key Description</label>
                                            <textarea
                                                    class="form-control editor "
                                                    id="key_description"
                                                    name="key_description"
                                                    rows="5">{{  $blogs->key_description }}</textarea>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="reading_time">Reading Time</label>
                                            <input name="reading_time" id="reading_time" value="{{ $blogs->eading_time}}" type="number"
                                                min="0" value="0"   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Gallery Image<span
                                                    class="note">*</span></label>
                                    </div>
                                
                                    <div class="row" id="show-images">
                                        @if(count($blogGalleries) > 0)
                                            @foreach($blogGalleries as $blogGallery)
                                                <div class="col-md-3 preview-img">
                                                    <div class="form-group">
                                                        <div class="box-image" style="height: 230px;">
                                                            <label for="gallery">
                                                                <img class="w-100" style="cursor: pointer;"
                                                                    src="{{ url($blogGallery->img) }}"
                                                                    alt="Image">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                                        <span data-id="{{ base64_encode($blogGallery->id) }}"
                                                                            class="btn btn-danger btn-sm mb-3 remove-img"><i
                                                                                    class="fa fa-trash-alt"></i> Remove</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="box-image">
                                                    <label for="img">
                                                        <img class="w-100" style="cursor:pointer;"
                                                            src="{{ url('images/gallery/file-upload.png') }}"
                                                            alt="Image">
                                                    </label>
                                                </div>
                                                <input type="file" name="img[]"
                                                    accept=".png , .jpg , .jpeg" multiple
                                                    id="img"
                                                    class="file-hidden-custom d-none multiple-upload"
                                                    style='display: none;'>
                                            </div>
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
                                         src="{{ $blogs->thumbnail ? url($blogs->thumbnail ) : url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="thumbnail"
                                           accept=".png , .jpg , .jpeg"
                                           class="file-hidden preview-image "
                                           value="submit" id="thumbnail">


                                </div>
                                <div class="text-center mb-4">
                                    <label for="thumbnail"
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                                class="fa fa-window-maximize"></i> Browse</label>
                                </div>


                                <div class="option_2">
                                    <div class="form-group text-center mb-1">
                                        <h6>Content Image</h6>
                                        <p class="note mb-1">(800px * 800px)</p>
                                        <img class="img-fluid"
                                            src="{{ $blogs->content_img ? url($blogs->content_img ) : url('images/default-image.png') }}"
                                            alt="Image">
                                        <input type="file" name="content_img"
                                            accept=".png , .jpg , .jpeg"
                                            class="file-hidden preview-image"
                                            value="submit" id="content_img">
                                    </div>
                                    <div class="text-center mb-4">
                                        <label for="content_img"
                                            class="btn btn-info text-white btn-sm mt-2"><i
                                                    class="fa fa-window-maximize"></i> Browse</label>
                                    </div>

                                    <div class="form-group text-center mb-1">
                                        <h6>Content Image 2</h6>
                                        <p class="note mb-1">(800px * 800px)</p>
                                        <img class="img-fluid"
                                            src="{{ $blogs->content_img_2 ? url($blogs->content_img_2 ) : url('images/default-image.png') }}"
                                            alt="Image">
                                        <input type="file" name="content_img_2"
                                            accept=".png , .jpg , .jpeg"
                                            class="file-hidden preview-image"
                                            value="submit" id="content_img_2">
                                    </div>
                                    <div class="text-center">
                                        <label for="content_img_2"
                                                class="btn btn-info text-white btn-sm mt-2"><i
                                                    class="fa fa-window-maximize"></i> Browse</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="btn-fixed">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> 
                                Update
                            </button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="{{ mix('/js/admins/pages/blog.js') }}"></script>
@endpush
@include('partials.ckeditor')




