@extends('layouts.app')

@section('content')
    <div id="social-value">
        <section class="section">
            <div class="section-header">
                <h1>Social Value</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">social-values</a></div>

                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @authorize('social-value', 'write')
                                <a href="{{ route('social-values.create') }}" class="btn btn-primary mr-1"><i class="fas fa-save"></i> Create</a>
                                @endauthorize
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="social-value-table" data-route="{{ route('social-values.table') }}" class="table table-md w-100 table-md">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Thumbnail</th>
                                            <th>Title</th>
                                            <th>Article</th>
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
    <script src="{{ mix('/js/admins/pages/social-value.js') }}"></script>
@endpush