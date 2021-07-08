@extends('layouts.app')

@section('content')
    <div id="gallery">
        <section class="section">
            <div class="section-header">
                <h1>Gallery</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Home</a></div>
                    <div class="breadcrumb-item"><a>Benefit</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table  class="table dataTable table-md w-100 table-md">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Page</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($groups as $i => $group)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $group->name }}</td>
                                                    <td>
                                                        <a href="{{ route('galleries.edit', base64_encode($group->id)) }}"
                                                        class='btn btn-default btn-sm btn-edit-action'
                                                        data-title='Edit' data-toggle='tooltip' data-placement='top'>
                                                        <i class='fas fa-pen text-primary'></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
    <script src="{{ mix('/js/admins/pages/gallery.js') }}"></script>
@endpush