@extends('layouts.app')
@section('content')
    <div id="course">
        <section class="section">
            <div class="section-header">
                <h1>Create Course</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ route('courses.index') }}">Course</a></div>
                    <div class="breadcrumb-item"><a>Create</a></div>
                </div>
            </div>
            <div class="section-body">
                {{ Form::open(['url' => route('courses.store'),'class' => 'need-validation' ,'files' => true ,'autocomplete' => 'off']) }}
                <div class="card">
                    <div class="row">
                        <div class="col-9">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Program<span class="note">*</span></label>
                                        <select name="program" class="form-control select2" required>
                                            <option value=""> -- Select Program --</option>
                                            @foreach($programs as $program)
                                                <option
                                                    {{ old('program') == base64_encode($program->id) ? 'selected' : '' }} value="{{ base64_encode($program->id) }}">{{ $program->title_en }}</option>
                                            @endforeach
                                        </select>
                                        @error('program')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span
                                                class="note">*</span></label>
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
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>SubTitle <img class="img-flag"
                                                             src="{{ url('images/flag/en.jpg') }}"><span
                                                class="note">*</span></label>
                                        <input name="subtitle_en" value="{{ old('subtitle_en') }}" type="text"
                                               class="form-control @error('subtitle_en') is-invalid @enderror"
                                               required>
                                        @error('subtitle_en')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>SubTitle <img class="img-flag"
                                                             src="{{ url('images/flag/kh.jpg') }}"></label>
                                        <input name="subtitle_kh" value="{{ old('subtitle_kh') }}" type="text"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Price($)<span class="note">*</span></label>
                                        <input name="price" value="{{ old('price') }}" type="text"
                                               class="form-control number @error('price') is-invalid @enderror"
                                               required>
                                        @error('price')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Start Date<span class="note">*</span></label>
                                        <input name="start_date" value="{{ old('start_date') }}" type="text"
                                               class="form-control datepicker @error('start_date') is-invalid @enderror"
                                               required>
                                        @error('start_date')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>End Date<span class="note">*</span></label>
                                        <input name="end_date" required value="{{ old('end_date') }}" type="text"
                                               class="form-control datepicker @error('end_date') is-invalid @enderror">
                                        @error('end_date')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Overview <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span
                                            class="note">*</span></label>
                                    <textarea name="overview_en" required
                                              class="form-control editor">{{ old('overview_en') }}</textarea>
                                    @error('overview_en')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Overview <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                    <textarea name="overview_kh"
                                              class="form-control editor">{{ old('overview_kh') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Outline <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span
                                            class="note">*</span></label>
                                    <textarea name="outline_en" required
                                              class="form-control editor">{{ old('outline_en') }}</textarea>
                                    @error('outline_en')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Outline <img class="img-flag" src="{{ url('images/flag/kh.jpg') }}"></label>
                                    <textarea name="outline_kh"
                                              class="form-control editor">{{ old('outline_kh') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Structure <img class="img-flag" src="{{ url('images/flag/en.jpg') }}"><span
                                            class="note">*</span></label>
                                    <textarea name="structure_en" required
                                              class="form-control editor">{{ old('structure_en') }}</textarea>
                                    @error('structure_en')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Structure <img class="img-flag"
                                                          src="{{ url('images/flag/kh.jpg') }}"></label>
                                    <textarea name="structure_kh"
                                              class="form-control editor">{{ old('structure_kh') }}</textarea>
                                </div>
                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Include</h5>
                                </div>

                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Include <img class="img-flag"
                                                                             src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Include <img class="img-flag"
                                                                             src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="include">
                                    @if(old('include_en'))
                                        @foreach(old('include_en') as $i => $include)
                                            <tr class="include-text">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $include }}"
                                                               class="form-control @error('include_en.'.$i) is-invalid @enderror"
                                                               placeholder="Include EN"
                                                               name="include_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('include_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Include KH"
                                                               name="include_kh[]">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-include' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
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
                                                           class="form-control @error('include_en') is-invalid @enderror"
                                                           placeholder="Include EN"
                                                           name="include_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Include KH"
                                                           name="include_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-include">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                    </tbody>
                                </table>

                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Requirement</h5>
                                </div>
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Requirement <img class="img-flag"
                                                                                 src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Requirement <img class="img-flag"
                                                                                 src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="requirement">
                                    @if(old('requirement_en'))
                                        @foreach(old('requirement_en') as $i => $requirement)
                                            <tr class="requirement-text">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $requirement }}"
                                                               class="form-control @error('requirement_en.'.$i) is-invalid @enderror"
                                                               placeholder="Requirement EN"
                                                               name="requirement_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('requirement_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Requirement KH"
                                                               name="requirement_kh[]">
                                                        <div class="input-group-append">
                                                            <span
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-requirement' : 'btn-danger btn-remove' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
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
                                                           class="form-control @error('requirement_en') is-invalid @enderror"
                                                           placeholder="Requirement EN"
                                                           name="requirement_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Requirement KH"
                                                           name="requirement_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-requirement">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>

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

                                <div class="card-head text-primary border-bottom mb-3">
                                    <h5 class="text-warning">Location</h5>
                                </div>
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>
                                            <label class="mb-0">Location <img class="img-flag"
                                                                              src="{{ url('images/flag/en.jpg') }}"><span
                                                    class="note">*</span></label>
                                        </th>
                                        <th>
                                            <label class="mb-0">Location <img class="img-flag"
                                                                              src="{{ url('images/flag/kh.jpg') }}"></label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="location">
                                    @if(old('location_en'))
                                        @foreach(old('location_en') as $i => $location)
                                            <tr class="location-text-{{ $i }}">
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ $location }}"
                                                               class="form-control @error('location_en.'.$i) is-invalid @enderror"
                                                               placeholder="Location EN"
                                                               name="location_en[]">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <input type="text" value="{{ old('location_kh')[$i] }}"
                                                               class="form-control"
                                                               placeholder="Location KH"
                                                               name="location_kh[]">
                                                        <div class="input-group-append">
                                                            <span data-index="{{ $i }}"
                                                                class="btn {{ $i == 0 ? 'btn-primary btn-add-location' : 'btn-danger btn-remove-location' }}">{{ $i == 0 ? 'Add' : 'Remove' }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="location-text-{{ $i }}">
                                                <td colspan="2">
                                                <textarea name="map[]" class="form-control @error('map.'.$i) is-invalid @enderror" placeholder="Map Embed" cols="30"
                                                          rows="3"></textarea>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control @error('location_en') is-invalid @enderror"
                                                           placeholder="Location EN"
                                                           name="location_en[]">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="Location KH"
                                                           name="location_kh[]">
                                                    <div class="input-group-append">
                                                        <span class="btn btn-primary btn-add-location">Add</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <textarea name="map[]" class="form-control @error('map') is-invalid @enderror" placeholder="Map Embed" cols="30"
                                                          rows="3"></textarea>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
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
                                           class="btn btn-info text-white btn-sm mt-2"><i
                                            class="fa fa-window-maximize"></i> Browse</label>
                                </div>

                                <div class="form-group text-center mb-1">
                                    <h6>Image<span class="note">*</span></h6>
                                    <p class="note mb-1">(800px * 800px)</p>
                                    <img class="img-fluid"
                                         src="{{ url('images/default-image.png') }}"
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
                </div>
                <div class="card-footer text-right">
                    <div class="btn-fixed">
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>
                            Create
                        </button>
                        <a href="{{ route('courses.index') }}" class="btn btn-light"><i
                                class="fas fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
@endsection
@include('partials.ckeditor')
@push('scripts')
    <script src="{{ mix('/js/admins/pages/course.js') }}"></script>
@endpush
