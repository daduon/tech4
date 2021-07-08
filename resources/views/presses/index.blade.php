@extends('layouts.app')

@section('content')
    <div id="press">
        <section class="section">
            <div class="section-header">
                <h1>Press</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Presses</a></div>

                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @authorize('blog', 'write')
                                <a href="{{ route('presses.create') }}" class="btn btn-primary mr-1"><i class="fas fa-save"></i> Create</a>
                                @endauthorize
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="press-table" data-route="{{ route('presses.table') }}" class="table table-md w-100 table-md">
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
    <script src="{{ mix('/js/admins/pages/press.js') }}"></script>
@endpush