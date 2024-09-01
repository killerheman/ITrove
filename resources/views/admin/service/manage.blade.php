@extends('admin.includes.layout')

@section('title', 'service Manage')

@section('head-area')
@endsection

@section('content')

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
                    <th>Icon Code</th>
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
                @foreach ($service as $service)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>
                            <div class="icon-box">
                                <i class="{{$service->pic}}"></i>
                            </div>
                           
                        </td>
                        <td>
                            <img src="{{asset($service->pic)}}" height="50px" width="50px" />
                        </td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->meta_title }}</td>
                        <td>{{ $service->meta_keyword }}</td>
                        <td>{{ $service->slug }}</td>
                        <td>{{ $service->meta_description}}</td>
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

                                    <a class="dropdown-item" href="{{ route('admin.service.edit', $service->slug) }}"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Edit</span>
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.service.destroy', $service->slug) }}"><i
                                    class="me-1" data-feather="message-square"></i><span
                                    class="align-middle">Delete</span>
                                </a>
                                    {{-- <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{ $sid }}').submit();"><i
                                        class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Delete</span>
                                    </a> --}}
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
@endsection