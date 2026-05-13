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
    <div class="card-header"><h3>Manage works</h3></div>
    <div class="card-body">
        <div class="table-responsive"> <!-- Zyada columns ke liye scroll zaroori hai -->
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Image</th>
                        <th>Thumbnail</th>
                        <th>Screenshots</th>
                        <th>Title</th>
                        <th>Technology</th>
                        <th>Slug</th>
                        <th>Meta Title</th>
                        <th>Meta Keyword</th>
                        <th>Meta Description</th>
                        <th>Short Description</th>  
                        <th>Full Description</th>  
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
{{-- DataTables JS --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
$(function () {
    $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: false,
        scrollX: true, // Horizontal scroll enable karne ke liye
        width: '100%',
        ajax: "{{ route('admin.work.index') }}",
        columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '5%'},
        {data: 'image', name: 'image', width: '10%'},
        {data: 'thumbnail', name: 'thumbnail', width: '10%'},
        {data: 'screenshot_img', name: 'screenshot_img', width: '15%'},
        {data: 'title', name: 'title'},
        {data: 'technology', name: 'technology'},
        {data: 'slug', name: 'slug'},
        {data: 'meta_title', name: 'meta_title'},
        {data: 'meta_keyword', name: 'meta_keyword'},
        {data: 'meta_description', name: 'meta_description'},
        {data: 'short_description', name: 'short_description'},
        {data: 'full_description', name: 'full_description'},
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