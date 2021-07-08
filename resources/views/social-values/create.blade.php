@extends('layouts.app')
@section('content')
    <div>
        <section id="social-value" class="section">
            <div class="section-header">
                <h1>Create Social Value</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('social-values.index') }}">Social Value</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('social-values.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9 bg-gray">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title <img class="img-flag"
                                                          src="{{ url('images/flag/en.jpg') }}"><span class="note">*</span></label>
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
                                        <label>Title <img class="img-flag"
                                                          src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="title_kh" value="{{ old('title_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type">Date<span class="text-danger">*</span></label>
                                    <input type="text" id="date" data-current="{{ date('m/d/Y') }}"
                                           class="form-control datepicker @error('date') is-invalid @enderror" required
                                           name="date"
                                           value="{{ old('date') ? old('date') : date('m/d/Y') }}">
                                    @error('date')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Address <img class="img-flag"
                                                            src="{{ url('images/flag/en.jpg') }}"><span class="note">*</span></label>
                                        <input name="address_en" value="{{ old('address_en') }}" type="text"
                                               class="form-control @error('address_en') is-invalid @enderror"
                                               required>
                                        @error('address_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Address <img class="img-flag"
                                                            src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="address_kh" value="{{ old('address_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label>Google Map<span class="note">*</span></label>
                                    <textarea name="map" cols="30"
                                              class="form-control @error('map') is-invalid @enderror"
                                              required
                                              rows="4">{{ old('map') }}</textarea>
                                </div>

                                <div class="form-group ">
                                    <label>Overview <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span class="note">*</span></label>
                                    <textarea name="overview_en" cols="30"
                                              class="form-control @error('overview_en') is-invalid @enderror"
                                              rows="5">{{old('overview_en')}}</textarea>
                                    @error('overview_en')
                                    <div class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label>Overview <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                    <textarea name="overview_kh" cols="30"
                                              class="form-control"
                                              rows="5">{{old('overview_kh')}}</textarea>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Description <img
                                                    class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span class="note">*</span></label>
                                        <textarea
                                                class="form-control editor @error('description_en') is-invalid @enderror"
                                                name="description_en"
                                                rows="5" required>{{old('description_en')}}</textarea>
                                        @error('description_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea
                                                class="form-control editor"
                                                name="description_kh"
                                                rows="5">{{old('description_kh')}}</textarea>

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Outline <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span class="note">*</span></label>
                                        <textarea
                                                class="form-control editor @error('outline_en') is-invalid @enderror"
                                                name="outline_en"
                                                rows="5" required>{{old('outline_en')}}</textarea>
                                        @error('outline_en')
                                        <div class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Outline <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <textarea
                                                class="form-control editor"
                                                name="outline_kh"
                                                rows="5">{{old('outline_kh')}}</textarea>

                                    </div>
                                </div>

                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Benefit</h5>
                                </div>
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Benefit <img class="img-flag"
                                                                             src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Benefit <img class="img-flag"
                                                                             src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="benefit">
                                    @if(old('benefit_en'))
                                        @foreach(old('benefit_en') as $i => $benefit)
                                            <tr class="benefit-text">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $benefit }}"
                                                               class="form-control @error('benefit_en.'.$i) is-invalid @enderror"
                                                               placeholder="Benefit EN"
                                                               name="benefit_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('benefit_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Benefit KH"
                                                               name="benefit_kh[]">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-benefit' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control @error('benefit_en') is-invalid @enderror"
                                                           placeholder="Benefit EN"
                                                           name="benefit_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Benefit KH"
                                                           name="benefit_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-benefit">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Eligible</h5>
                                </div>
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Eligible <img class="img-flag"
                                                                              src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Eligible <img class="img-flag"
                                                                              src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="eligible">
                                    @if(old('eligible_en'))
                                        @foreach(old('eligible_en') as $i => $eligible)
                                            <tr class="eligible-text">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $eligible }}"
                                                               class="form-control @error('eligible_en.'.$i) is-invalid @enderror"
                                                               placeholder="Eligible EN"
                                                               name="eligible_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('eligible_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Eligible KH"
                                                               name="eligible_kh[]">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-eligible' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control @error('eligible_en') is-invalid @enderror"
                                                           placeholder="Eligible EN"
                                                           name="eligible_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Eligible KH"
                                                           name="eligible_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-eligible">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Process</h5>
                                </div>
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Process <img class="img-flag"
                                                                             src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Process <img class="img-flag"
                                                                             src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="process">
                                    @if(old('process_en'))
                                        @foreach(old('process_en') as $i => $process)
                                            <tr class="process-text">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $process }}"
                                                               class="form-control @error('process_en.'.$i) is-invalid @enderror"
                                                               placeholder="Process EN"
                                                               name="process_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('process_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Process KH"
                                                               name="process_kh[]">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-process' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control @error('process_en') is-invalid @enderror"
                                                           placeholder="Process EN"
                                                           name="process_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Process KH"
                                                           name="process_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-process">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

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
                                            <input type="file" name="galleries[]"
                                                   accept=".png , .jpg , .jpeg" multiple
                                                   id="gallery"
                                                   class="file-hidden-custom d-none multiple-upload"
                                                   style='display: none;'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 bg-gray">
                            <div class="card-body">
                                <div class="form-group text-center mb-3 ">
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
                                    <div class="text-center mb-4">
                                        <label for="thumbnail"
                                               class="btn btn-info text-white btn-sm mt-2"><i
                                                    class="fa fa-window-maximize"></i> Browse</label>
                                    </div>
                                </div>


                                <div class="form-group text-center mb-1">
                                    <h6>Content Image</h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
                                         alt="Image">
                                    <input type="file" name="img"
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
                            <a href="{{ route('social-values.index') }}" class="btn btn-light"><i
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

@push('scripts')
    <script src="{{ mix('/js/admins/pages/social-value.js') }}"></script>
@endpush
