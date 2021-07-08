@extends('layouts.app')
@section('content')
    <div>
        <section class="section" id="parent">
            <div class="section-header">
                <h1>Parent Benefit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Home</a></div>
                    <div class="breadcrumb-item"><a>Parent Benefit</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('parent.update',base64_encode(1)),'id'=> 'form','method' => 'PUT' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body" id="benefit">
{{--                                @if(old('title_en'))--}}
{{--                                    @foreach(old('title_en') as $i => $benefit)--}}
{{--                                        <div class="form-row">--}}
{{--                                            <div class="form-group col-md-5">--}}
{{--                                                <label>Title<span class="note">*</span> <img class="img-flag"--}}
{{--                                                                                             src="{{ url('images/flag/en.jpg') }}"></label>--}}
{{--                                                <input name="title_en[]" value="{{ $benefit->title_en }}" type="text"--}}
{{--                                                       class="form-control @error('title_en'.$i) is-invalid @enderror mb-3"--}}
{{--                                                       required>--}}
{{--                                                @error('title_en')--}}
{{--                                                <div class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </div>--}}
{{--                                                @enderror--}}

{{--                                                <label>Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>--}}
{{--                                                <textarea name="text_en[]" cols="30" class="form-control" id="text_en"--}}
{{--                                                          rows="4">{{ $benefit->title_en }}</textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group col-md-5">--}}
{{--                                                <label>Title <img class="img-flag"--}}
{{--                                                                  src="{{ url('images/flag/kh.jpg') }}"></label>--}}
{{--                                                <input name="title_kh[]" value="{{ old('title_kh')[$i] }}" type="text"--}}
{{--                                                       class="form-control mb-3">--}}

{{--                                                <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>--}}
{{--                                                <textarea name="text_kh" cols="30" class="form-control" id="text_kh"--}}
{{--                                                          rows="4">{{ old('text_kh')[$i] }}</textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-2">--}}
{{--                                                <div class="form-group text-center mb-1">--}}
{{--                                                    <h6>Icon Image </h6>--}}
{{--                                                    <p class="note mb-1">(500px * 500px)</p>--}}
{{--                                                    <img class="img-fluid"--}}
{{--                                                         src="{{ url('images/benefit.png') }}"--}}
{{--                                                         alt="Image">--}}
{{--                                                    <input type="file" name="icon_img"--}}
{{--                                                           accept="image/x-png,image/jpg"--}}
{{--                                                           class="file-hidden preview-image "--}}
{{--                                                           value="submit" id="icon_img">--}}
{{--                                                </div>--}}
{{--                                                <div class="text-center">--}}
{{--                                                    <label for="icon_img"--}}
{{--                                                           class="btn btn-info text-white btn-sm mt-2"><i--}}
{{--                                                                class="fa fa-window-maximize"></i> Browse</label>--}}
{{--                                                </div>--}}
{{--                                                <div class="btn-add ">--}}
{{--                                                    <div class="input-group-append">--}}
{{--                                                            <span--}}
{{--                                                                    class="btn {{ $i == 0 ? 'btn-primary btn-add-include' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                    @endif--}}
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label>Title<span class="note">*</span> <img class="img-flag"
                                                                                     src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="title_en" value="{{ old('title_en') }}" type="text"
                                               class="form-control @error('title_en') is-invalid @enderror mb-3"
                                               required>
                                        @error('title_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror

                                        <label>Text <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <textarea name="text_en" cols="30" class="form-control" id="text_en"
                                                  rows="4">{{ old('text_en') }}</textarea>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Title <img class="img-flag"
                                                          src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="title_kh" value="{{ old('title_kh') }}" type="text"
                                               class="form-control mb-3">

                                        <label>Text <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea name="text_kh" cols="30" class="form-control" id="text_kh"
                                                  rows="4">{{ old('text_kh') }}</textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group text-center mb-1">
                                            <h6>Icon Image </h6>
                                            <p class="note mb-1">(500px * 500px)</p>
                                            <img class="img-fluid"
                                                 src="{{ url('images/benefit.png') }}"
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
                                        <div class="input-group-append btn-add">
                                               <span class="btn btn-primary btn-add-benefit">Add</span>
                                           </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="btn-fixed">
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>
                                Create
                            </button>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="{{ mix('/js/admins/pages/parent.js') }}"></script>
@endpush
@push('css')
    <style>
        /*.btn-add.text-center {*/
        /*    position: absolute;*/
        /*    bottom: -30px;*/
        /*    right: 0;*/
        /*}*/
    </style>
    @endpush


