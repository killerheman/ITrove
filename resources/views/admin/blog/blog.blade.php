@extends('admin.includes.layout')

@section('title', 'Blog Category')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3>
              {{isset($editcategory)?'Update Blog Category':'Add New Blog Category'}}</h3>
        </div>
        <div class="card-body">
            <form class="needs-validation" 
      action="{{ isset($editcategory) ? route('admin.blog-category.update', $editcategory->id) : route('admin.blog-category.store') }}" 
      method="post">
                @if (isset($editcategory))
                    @method('patch')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Category Name</label>
                        <input type="text" id="basic-addon-name" name='category_name' class="form-control"
                            value="{{ $editcategory->category_name ?? '' }}" placeholder="Enter Blog Category" aria-label="blog_title"
                            aria-describedby="basic-addon-title" required />
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-1">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Manage Blogs Category </h3>
        </div>
        <div class="card-body" style="overflow-y: auto;">
            <table class="datatables-basic table datatable ">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($categories as $blog)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $blog->category_name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="feather icon-settings"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @php $bid=Crypt::encrypt($blog->id); @endphp

                                        <a class="dropdown-item" href="{{ route('admin.blog-category.edit', $bid) }}"><i
                                                class="me-1" data-feather="check-square"></i><span
                                                class="align-middle">Edit</span>
                                        </a>

                                        <a class="dropdown-item" href=""
                                            onclick="event.preventDefault();document.getElementById('delete-form-{{ $bid }}').submit();"><i
                                                class="me-1" data-feather="message-square"></i><span
                                                class="align-middle">Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        <form id="delete-form-{{ $bid }}" action=""
                            method="post" style="display: none;">
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
    <script src="{{ asset('backend/assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts/forms/form-select2.js') }}"></script>
@endsection
