@extends('admin.includes.layout')
@section('title', 'Manage Works')
<style>
    /* Table ko container se bahar nikalne se rokne ke liye */
    .yajra-datatable {
        width: 100% !important;
        table-layout: auto;
    }

    /* Description cells ko control karne ke liye */
    .yajra-datatable td {
        max-width: 200px; /* Max width set karein */
        white-space: nowrap; /* Text ko ek line mein rakhein */
        overflow: hidden;
        text-overflow: ellipsis; /* Zyada text hone par ... dikhayega */
        vertical-align: middle;
    }

    /* Jab mouse le jayein tab poora dikhe (Optional) */
    .yajra-datatable td:hover {
        white-space: normal;
        overflow: visible;
    }

    .yajra-datatable thead th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
    white-space: nowrap;
}
</style>

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Manage Works</h4>
        <a href="{{ route('admin.work.create') }}" class="btn btn-primary">
            <i class="feather icon-plus"></i> Add New Work
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive"> <!-- Zyada columns ke liye scroll zaroori hai -->
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Order</th>
                        <th>Live Link</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Technology</th>
                        <th>Short Description</th>  
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script-area')
<script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        scrollX: true,
        width: '100%',
        ajax: "{{ route('admin.work.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '5%'},
            {data: 'featured_order', name: 'featured_order', width: '10%'},
            {data: 'live_url', name: 'live_url', width: '10%'},
            {data: 'image', name: 'image', width: '8%'},
            {data: 'title', name: 'title'},
            {data: 'category', name: 'category'},
            {data: 'technology', name: 'technology'},
            {data: 'short_description', name: 'short_description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});

function confirmDelete(id) {
    if(confirm('Kya aap ise delete karna chahte hain?')) {
        document.getElementById('delete-form-' + id).submit();
    }
}
</script>
@endsection