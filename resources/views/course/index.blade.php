@extends('layouts.app')

@section('content')
    <div id="course">
        <section class="section">
            <div class="section-header">
                <h1>Courses</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Course</a></div>

                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @authorize('course', 'write')
                                <a href="{{ route('courses.create') }}" class="btn btn-primary mr-1"><i class="fas fa-save"></i> Create</a>
                                @endauthorize
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="course-table" data-route="{{ route('course.table') }}" class="table table-md w-100 table-md">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Program</th>
                                            <th>Title</th>
                                            <th>SubTitle</th>
                                            <th>Price</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Seat Left</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script src="{{ mix('/js/admins/pages/course.js') }}"></script>
@endpush
