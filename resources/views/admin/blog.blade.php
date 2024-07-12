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
                    Add New Blog
            </h3>
        </div>
        <div class="card-body">
            <form class="needs-validation"
            action="{{ isset($editblog) ? "#" :route('admin.blog-store') }}"
                method='post' enctype="multipart/form-data">
                @if (isset($editblog))
                @method('patch')
            @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Title</label>

                        <input type="text" id="basic-addon-name" name='blog_title' class="form-control"
                            value="{{$editblog->blog_title ?? ''}}" placeholder="Enter Title"
                            aria-label="blog_title" aria-describedby="basic-addon-title" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_img">Image</label>
                        <input type="file" name='blog_img' id="blog_img" class="form-control " aria-label=""
                            aria-describedby="blog_img" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Created Date</label>
                        <input type="date" id="basic-addon-name" name='create_date' class="form-control"
                            value="{{$editblog->create_date ?? ''}}" aria-label="blog_title" aria-describedby="basic-addon-create_date" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="desc">Category</label>
                        <select class="form-control select2 form-select" id="blog_category_id"  name="blog_category_id" required>
                            <option selected disabled value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}} {{isset($editblog) ?($category->id==$editblog->blog_category_id ? 'selected' : ''):'' }}">{{$category->blog_category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Description</label>
                        <textarea name="blog_description" id="blog_description" cols="70" rows="2">{{$editblog->blog_description ??''}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">Add</button>
                    </div>
                    @if (isset($editblog))
                        <div class="col-sm-6">
                            <img src="{{asset($editblog->blog_img) }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>

            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Manage Blog</h3>
        </div>
        <div class="card-body" style="overflow-y: auto;">
            <table class="datatables-basic table datatable ">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Action</th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>
                                <img src="{{ asset( $blog->blog_img) }}" class="me-75 bg-light-danger"
                                    style="height:60px;width:60px;" />
                            </td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->create_date }}</td>
                            <td>{{ $blog->blog_description }}</td>
                            <td>{{ $blog->blogCategory->blog_category }}</td>


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
                                </div>
                            </td>

                        </tr>

                        <form id="delete-form-{{ $bid }}" action="{{ route('admin.blog-delete', $bid) }}"
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
    <script src="{{asset('backend/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/scripts/forms/form-select2.js')}}"></script>
@endsection
