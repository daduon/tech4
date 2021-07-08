@extends('layouts.app')

@section('content')
    <div id="job">
        <section class="section">
            <div class="section-header">
                <h1>Job</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">jobs</a></div>

                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @authorize('job', 'write')
                                <a href="{{ route('job-opportunities.create') }}" class="btn btn-primary mr-1"><i class="fas fa-save"></i> Create</a>
                                @endauthorize
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="job-table" data-route="{{ route('jobs.table') }}" class="table table-md w-100 table-md">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Icon Image</th>
                                            <th>Title</th>
                                            <th>Position Count</th>
                                            <th>Start/End Date</th>
                                            <th>Description</th>
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
    <script src="{{ mix('/js/admins/pages/job.js') }}"></script>
@endpush