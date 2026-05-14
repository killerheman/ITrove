@extends('admin.includes.layout')

@section('title', 'Manage Pricing')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title">Manage Pricing</h4>
        <a href="{{ route('admin.pricing.create') }}" class="btn btn-primary">
            <i class="feather icon-plus"></i> Add New Price Plan
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table datatable-pricing table-bordered">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Sequence</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
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
        $('.datatable-pricing').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.pricing.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title', name: 'title' },
                { data: 'description', name: 'description' },
                { data: 'sequence', name: 'sequence' },
                { data: 'slug', name: 'slug' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });

    function deletePricing(id) {
        if(confirm('Are you sure you want to delete this pricing plan?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
@endsection
