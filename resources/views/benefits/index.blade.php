@extends('layouts.app')

@section('content')
    <div id="benefit">
        <section class="section">
            <div class="section-header">
                <h1>Benefit</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Home</a></div>
                    <div class="breadcrumb-item"><a>Benefit</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @authorize('benefit', 'write')
                                <a href="{{ route('benefits.create') }}" class="btn btn-primary mr-1"><i class="fas fa-save"></i> Create</a>
                                @endauthorize
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="benefit-table" data-route="{{ route('benefits.table') }}" class="table table-md w-100 table-md">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Page</th>
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
    <script src="{{ mix('/js/admins/pages/benefit.js') }}"></script>
@endpush