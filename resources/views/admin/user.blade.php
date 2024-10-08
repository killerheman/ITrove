@extends('admin.includes.layout')

@section('title', 'Users')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>
                @if (!isset($editemployee))
                    Add New User
                @else
                    Edit User Details
                @endif
            </h3>
        </div>
        <div class="card-body">
            <form class="needs-validation"
                action="{{ isset($editemployee) ? route('admin.user.update', $editemployee->id) : route('admin.user.store') }}"
                method='post' enctype="multipart/form-data">
                @if (isset($editemployee))
                    @method('patch')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">First Name</label>

                        <input type="text" id="basic-addon-name" name='first_name' class="form-control"
                            value="{{ isset($editemployee) ? $editemployee->first_name : '' }}" placeholder="Enter first name"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Last Name</label>

                        <input type="text" id="basic-addon-name" name='last_name' class="form-control"
                            value="{{ isset($editemployee) ? $editemployee->last_name : '' }}" placeholder="Enter last name"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Phone</label>

                        <input type="number" id="basic-addon-name" name='phone' class="form-control"
                            value="{{ isset($editemployee) ? $editemployee->phone : '' }}" placeholder="Enter Phone number"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Email</label>

                        <input type="text" id="basic-addon-name" name='email' class="form-control"
                            value="{{ isset($editemployee) ? $editemployee->email : '' }}" placeholder="Enter email"
                            aria-label="email" aria-describedby="basic-addon-name" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="desc">Role Name</label>
                        <select class="form-control select2 form-select" id="select2-basic"  name='roleid' required>
                        @if(isset($editemployee))
                              <option selected hidden value='{{$editemployee->roles[0]->id ?? ''}}'>{{$editemployee->roles[0]->name ?? ''}}</option>
                        @else
                        <option selected disabled value="">--Select Role--</option>
                        @endif
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="pic">Image Thumbnail</label>
                        <input type="file" name='pic' id="pic" class="form-control " aria-label="pic"
                            aria-describedby="pic" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">{{ isset($editemployee) ? 'Update' : 'Add' }}</button>
                    </div>
                    @if (isset($editemployee))
                        <div class="col-sm-6">
                            <img src="{{asset($editemployee->pic) }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>

            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Manage Users</h3>
        </div>
        <div class="card-body" style="overflow-y: auto;">
            <table class="datatables-basic table datatable ">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                <img src="{{ asset( $employee->pic) }}" class="me-75 bg-light-danger"
                                    style="height:60px;width:60px;" />
                            </td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->roles[0]->name ?? '' }}</td>

                            <td>
                                {{-- <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                                    <div class="mb-1 breadcrumb-right">
                                        <div class="dropdown">
                                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-car"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                @php $eid=Crypt::encrypt($employee->id); @endphp

                                                <a class="dropdown-item" href="{{ route('admin.user.edit', $eid) }}"><i
                                                        class="me-1" data-feather="check-square"></i><span
                                                        class="align-middle">Edit</span>
                                                </a>


                                                <a class="dropdown-item" href=""
                                                onclick="event.preventDefault();document.getElementById('delete-form-{{ $eid }}').submit();"><i
                                                    class="me-1" data-feather="message-square"></i><span
                                                    class="align-middle">Delete</span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-settings"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @php $eid=Crypt::encrypt($employee->id); @endphp

                                        <a class="dropdown-item" href="{{ route('admin.user.edit', $eid) }}"><i
                                                class="me-1" data-feather="check-square"></i><span
                                                class="align-middle">Edit</span>
                                        </a>


                                        <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();document.getElementById('delete-form-{{ $eid }}').submit();"><i
                                            class="me-1" data-feather="message-square"></i><span
                                            class="align-middle">Delete</span>
                                        </a>

                                    </div>
                                </div>
                            </td>

                        </tr>

                        {{-- <form id="delete-form-{{ $eid }}" action="{{ route('admin.user.destroy', $eid) }}"
                            method="post" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form> --}}
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('script-area')
    {{-- <script src="{{asset('BackEnd/assets/js/scripts/forms/form-validation.js')}}"></script> --}}
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{asset('backend/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/scripts/forms/form-select2.js')}}"></script>
@endsection
