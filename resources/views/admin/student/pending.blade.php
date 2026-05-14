@extends('admin.includes.layout')

@section('title', 'Pending Students')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pending Students</h4>
        </div>
        <div class="card-body" style="overflow-y: auto;">
            <table class="datatables-basic table datatable table-hover">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>College</th>
                        <th>Branch</th>
                        <th>Session</th>
                        <th>Phone</th>
                        <th>Registration Date</th>
                        <th>Payment Status</th>
                        {{-- <th>Action</th> --}}

                    </tr>

                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->fname }}</td>
                            <td>{{ $student->collegename }}</td>
                            <td>{{ $student->branch }}</td>
                            <td>{{ $student->session }}</td>
                            <td>{{ $student->mobileno }}</td>
                            <td>{{ \Carbon\Carbon::parse($student->created_at)->format('d-m-Y') }}</td>
                            <td>{{ $student->payment_status == 0 ? 'Pending' : 'Completed'  }}</td>


                            {{-- <td> --}}
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

                                {{-- <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-settings"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @php $bid=Crypt::encrypt($blog->id); @endphp

                                        <a class="dropdown-item" href="{{ route('admin.blog-edit', $bid) }}"><i
                                            class="me-1" data-feather="check-square"></i><span
                                            class="align-middle">Edit</span>
                                    </a>

                                        <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();document.getElementById('delete-form-{{ $bid }}').submit();"><i
                                            class="me-1" data-feather="message-square"></i><span
                                            class="align-middle">Delete</span>
                                        </a>
                                    </div>
                                </div> --}}
                            {{-- </td> --}}

                        </tr>

                        {{-- <form id="delete-form-{{ $bid }}" action="{{ route('admin.blog-delete', $bid) }}"
                            method="post" style="display: none;">
                            @csrf
                        </form> --}}
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('script-area')
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                "order": [[0, "asc"]],
                "dom": '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                "language": {
                    "paginate": {
                        "previous": "&nbsp;",
                        "next": "&nbsp;"
                    }
                }
            });
        });
    </script>
@endsection
