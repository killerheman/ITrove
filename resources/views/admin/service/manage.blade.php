@extends('admin.includes.layout')

@section('title', 'Service Manage')

@section('header-area')
    {{-- Yajra DataTables CSS (Agar layout mein nahi hai) --}}
    <link rel="stylesheet" href="{{ asset('backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Manage Services</h4>
        <a href="{{ route('admin.service.create') }}" class="btn btn-primary">
            <i class="feather icon-plus"></i> Add New Service
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table datatable-service table-bordered">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Icon</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Meta Title</th>
                        <th>Meta Keyword</th>
                        <th>Slug</th>
                        <th>Meta Description</th>
                        <th>Description</th>  
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Data JS se load hoga --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script-area')
<script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

<script>
    $(function() {
    $('.datatable-service').DataTable({ // Apni table class check karein
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.service.index') }}", // Yeh sahi route hai
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'fa_icon_html', name: 'fa_icon_html' },
            { data: 'image_html', name: 'image_html' },
            { data: 'title', name: 'title' },
            { data: 'meta_title', name: 'meta_title' },
            { data: 'meta_keyword', name: 'meta_keyword' },
            { data: 'slug', name: 'slug' },
            { data: 'meta_description', name: 'meta_description' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

    // Delete Confirmation Function
    function deleteService(slug) {
        if(confirm('Are you sure you want to delete this service?')) {
            document.getElementById('delete-form-' + slug).submit();
        }
    }
</script>
@endsection