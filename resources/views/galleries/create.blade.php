@extends('layouts.app')
@section('content')
    <div>
        <section class="section">
            <div class="section-header">
                <h1>Gallery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('galleries.index') }}">Gallery</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('galleries.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-check form-group ">
                                        @foreach($groups as $i => $group)
                                            <input class="form-check-input " type="radio"
                                                   {{ old('group_id') == base64_encode($group->id) ? 'checked' : ($i == 0 ? 'checked' : '') }} name="group_id"

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
                                <div class="form-group">
                                    <label>Gallery Image<span
                                                class="note">*</span></label>
                                </div>
                                <div class="row" id="show-images">
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
{{--                        <div class="col-3">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="form-group text-center mb-1">--}}
{{--                                    <h6>Icon Image </h6>--}}
{{--                                    <p class="note mb-1">(500px * 500px)</p>--}}
{{--                                    <img class="img-fluid"--}}
{{--                                         src="{{ url('images/default-image.png') }}"--}}
{{--                                         alt="Image">--}}
{{--                                    <input type="file" name="icon_img"--}}
{{--                                           accept="image/x-png,image/jpg"--}}
{{--                                           class="file-hidden preview-image "--}}
{{--                                           value="submit" id="icon_img">--}}
{{--                                </div>--}}
{{--                                <div class="text-center">--}}
{{--                                    <label for="icon_img"--}}
{{--                                           class="btn btn-info text-white btn-sm mt-2"><i--}}
{{--                                                class="fa fa-window-maximize"></i> Browse</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Create
                        </button>
                        <a href="{{ route('galleries.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection


