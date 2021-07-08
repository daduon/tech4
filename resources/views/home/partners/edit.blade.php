@extends('layouts.app')
@section('content')
    <div id="partner">
        <section class="section">
            <div class="section-header">
                <h1>Partner</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('partners.index') }}">Partner</a></div>
                    <div class="breadcrumb-item"><a>Edit</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('partners.update',base64_encode($partners->id)),'id'=> 'form','method' => 'PUT','files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-8">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Name<span class="note">*</span> <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"></label>
                                        <input name="name_en" value="{{ $partners->name_en }}" type="text"
                                               class="form-control @error('name_en') is-invalid @enderror"
                                               required>
                                        @error('name_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="name_kh" value="{{ $partners->name_kh}}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Link(URL) Partner</label>
                                        <input name="url" value="{{ $partners->url }}" type="text"
                                               class="form-control ">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <div class="form-group text-center mb-1">
                                    <h6>Partner Image <span class="note">*</span></h6>
                                    <p class="note mb-1">(500px * 400px)</p>
                                    <img class="img-fluid"
                                         src="{{ $partners->img ? url($partners->img) : url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="img"
                                           accept="image/x-png,image/jpg"
                                           class="file-hidden preview-image @error('img') is-invalid @enderror"
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
                                Update
                            </button>
                            <a href="{{ route('partners.index') }}" class="btn btn-light"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                        </div>

                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection