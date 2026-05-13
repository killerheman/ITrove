@extends('admin.includes.layout')

@section('title', 'Service Manage')

@section('head-area')
    {{-- Yajra DataTables CSS (Agar layout mein nahi hai) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Manage Services</h3>
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
{{-- DataTables JS --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

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