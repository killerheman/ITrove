@extends('admin.includes.layout')

@section('title', 'Blog')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
                Add New Service
        </h3>
    </div>
    <div class="card-body">
        <form class="needs-validation"
        action="{{isset($editservice)?route('admin.service.update',Crypt::encrypt($editservice->id)):route('admin.service.store') }}"
            method='post' enctype="multipart/form-data">
            @if (isset($editservice))
            @method('patch')
        @endif
            @csrf
            <div class="row">
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Title</label>
                    <input type="text" id="basic-addon-name" value="{{$editservice->title??''}}" name='service_title' class="form-control"
                        value="" placeholder="Enter Title"
                        aria-label="service_title" aria-describedby="basic-addon-title" required />
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="service_img">Image</label>
                    <input type="file" name='service_img' id="service_img" class="form-control " aria-label=""
                        aria-describedby="service_img" />
                        @if (isset($editservice))
                        <div class="col-sm-6">
                            <img src="{{asset($editservice->pic ) }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Description</label>
                    <textarea name="service_description" id="service_description"  class="form-control " cols="70" rows="2">{{$editservice->description??''}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <button type="submit"
                        class="btn btn-primary waves-effect waves-float waves-light">{{isset($editservice)?'Update':'Add'}}</button>
                </div>
               
            </div>

        </form>
    </div>
</div>

{{-- Manahr Service --}}
<div class="card">
    <div class="card-header">
        <h3>Manage Services</h3>
    </div>
    <div class="card-body" style="overflow-y: auto;">
        <table class="datatables-basic table datatable ">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>  
                    <th>Action</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($service as $service)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>
                            <img src="{{ asset($service->pic) }}" class="me-75 bg-light-danger"
                                style="height:60px;width:60px;" />
                        </td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
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
                                    @php $sid=Crypt::encrypt($service->id); @endphp

                                    <a class="dropdown-item" href="{{ route('admin.service.edit', $sid) }}"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Edit</span>
                                </a>

                                    <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{ $sid }}').submit();"><i
                                        class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>

                    </tr>

                    <form id="delete-form-{{ $sid }}" action="{{ route('admin.service.destroy', $sid) }}"
                        method="delete" style="display: none;">
                        @csrf
                    </form>
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