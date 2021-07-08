@extends('layouts.app')
@section('content')
    <div id="gallery">
        <section class="section">
            <div class="section-header">
                <h1>Gallery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('galleries.index') }}">Gallery</a></div>
                    <div class="breadcrumb-item"><a>Edit</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('galleries.update',base64_encode($galleries->first()->group_id)),'id'=> 'form','method' => 'PUT','files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="form-group">
                                        <label class="form-check-label mr-5" for="{{ $group->name }}">
                                            {{ $group->name }}
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label>Gallery Image<span
                                                class="note">*</span></label>
                                </div>
                                <div class="row" id="show-images">
                                    @if(count($galleries) > 0)
                                        @foreach($galleries as $gallery)
                                            <div class="col-md-3 preview-img">
                                                <div class="form-group">
                                                    <div class="box-image" style="height: 230px;">
                                                        <label for="gallery">
                                                            <img class="w-100" style="cursor: pointer;"
                                                                 src="{{ url($gallery->img) }}"
                                                                 alt="Image">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                                     <span data-id="{{ base64_encode($gallery->id) }}"  class="btn btn-danger btn-sm mb-3 remove-img"><i
                                                                                 class="fa fa-trash-alt"></i> Remove</span>
                                                </div>
                                            </div>
                                            @endforeach
                                    @endif
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="box-image">
                                                <label for="img">
                                                    <img class="w-100" style="cursor:pointer;"
                                                         src="{{ url('images/gallery/file-upload.png') }}"
                                                         alt="Image">
                                                </label>
                                            </div>
                                            <input type="file" name="img[]"
                                                   accept="image/x-png,image/jpg" multiple
                                                   id="img"
                                                   class="file-hidden-custom d-none multiple-upload"
                                                   style='display: none;'>
                                        </div>
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
                            <a href="{{ route('galleries.index') }}" class="btn btn-light"><i
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
    <script src="{{ mix('/js/admins/pages/gallery.js') }}"></script>
@endpush


