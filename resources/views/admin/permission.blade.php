@extends('admin.includes.layout')

@section('title', 'Permissions')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>
                @if (!isset($editpermission))
                    Add New Permission
                @else
                    Update Permission
                @endif
            </h3>
        </div>
        <div class="card-body">
            <form class="needs-validation"
                action="{{ route('admin.permission.store') }}"
                method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Permission Name</label>

                        <input type="text" id="basic-addon-name" name='name' class="form-control"
                            value="{{ isset($editpermission) ? $editpermission->name : '' }}" placeholder="Permission Name"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">{{ isset($editpermission) ? 'Update' : 'Add' }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Manage Permissions</h3>
        </div>
        <div class="card-body">
            <table class="datatables-basic table datatable">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->created_at }}</td>
                            <td>
                                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                                    <div class="mb-1 breadcrumb-right">
                                        <div class="dropdown">
                                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i data-feather="grid"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @php $cid=Crypt::encrypt($permission->id); @endphp
                                                <a class="dropdown-item" href="{{ route('admin.permission.edit', $cid) }}"><i
                                                        class="me-1" data-feather="check-square"></i><span
                                                        class="align-middle">Edit</span></a>
                                                        <a class="dropdown-item" href=""
                                                        onclick="event.preventDefault();document.getElementById('delete-form-{{ $cid }}').submit();"><i
                                                            class="me-1" data-feather="message-square"></i><span
                                                            class="align-middle">Delete</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <form id="delete-form-{{ $cid }}" action="{{ route('admin.permission.destroy', $cid) }}"
                            method="post" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form>
                    @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td>Create Brand</td>
                        <td>Admin</td>
                        <td>123847829</td>
                    </tr> --}}

                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('script-area')
    {{-- <script src="{{asset('backend/assets/js/scripts/forms/form-validation.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection
