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
            <h3>{{ isset($editBlog) ? 'Update Blog' : 'Add New Blog' }}</h3>
        </div>
        <div class="card-body">
            {{-- Form Action fixed with 'admin.' prefix --}}
            <form class="needs-validation"
                action="{{ isset($editBlog) ? route('admin.blog-update', encrypt($editBlog->id)) : route('admin.blog-store') }}"
                method="post" enctype="multipart/form-data">
                
                @csrf
                @if (isset($editBlog))
                    @method('patch')
                @endif

                <div class="row">
                    {{-- Title --}}
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_title">Title</label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control"
                            value="{{ isset($editBlog) ? $editBlog->blog_title : old('blog_title') }}" 
                            placeholder="Enter Title" required />
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_img">Image</label>
                        <input type="file" name='blog_img' id="blog_img" class="form-control" />
                        
                        @if (isset($editBlog))
                            <div class="mt-1">
                                <img src="{{ asset($editBlog->blog_img) }}" class="img-thumbnail" style="height:80px;width:80px;">
                                <input type="hidden" name="old_img" value="{{ $editBlog->blog_img }}"/>
                            </div>
                        @endif
                    </div>

                    {{-- Created Date --}}
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="create_date">Created Date</label>
                        <input type="date" name='create_date' id="create_date" class="form-control"
                            value="{{ isset($editBlog) ? $editBlog->create_date : old('create_date') }}" required />
                    </div>

                    {{-- Category --}}
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_category_id">Category</label>
                        <select class="form-control select2 form-select" id="blog_category_id" name="blog_category_id" required>
                            <option selected disabled value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ (isset($editBlog) && $editBlog->blog_category_id == $category->id) ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Meta Title & Slug --}}
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name='meta_title' value="{{ $editBlog->meta_title ?? '' }}" class="form-control" placeholder="Meta Title" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Slug</label>
                        <input type="text" name='slug' value="{{ $editBlog->slug ?? '' }}" class="form-control" placeholder="Slug (unique)" />
                    </div>

                    {{-- Meta Keywords & Description --}}
                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Keyword</label>
                        <input type="text" name='meta_keyword' value="{{ $editBlog->meta_keyword ?? '' }}" class="form-control" placeholder="Keywords" />
                    </div>
                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Description</label>
                        <textarea name='meta_desc' class="form-control" rows="2">{{ $editBlog->meta_description ?? '' }}</textarea>
                    </div>

                    {{-- Content Description --}}
                    <div class="col-md-12 mb-1">
                        <label class="form-label">Description</label>
                        <textarea name="blog_description" id="blog_description" class="form-control">{!! $editBlog->blog_description ?? '' !!}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                            {{ isset($editBlog) ? 'Update' : 'Add' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Manage Blog Table --}}
    <div class="card">
        <div class="card-header">
            <h3>Manage Blog</h3>
        </div>
        <div class="card-body" style="overflow-x: auto;">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset($blog->blog_img) }}" class="img-thumbnail" style="height:50px;width:50px;" />
                            </td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->create_date }}</td>
                            <td>{{ $blog->blogCategory->category_name ?? 'N/A' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton{{ $blog->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="feather icon-settings"></i>
</button>
                                    <div class="dropdown-menu">
                                        {{-- Fixed route names with 'admin.' prefix --}}
                                        <a class="dropdown-item" href="{{ route('admin.blog-edit', encrypt($blog->id)) }}">
                                            <i data-feather="check-square"></i> Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="#"
                                           onclick="event.preventDefault(); if(confirm('Delete this blog?')) { document.getElementById('delete-form-{{ $blog->id }}').submit(); }">
                                            <i data-feather="trash-2"></i> Delete
                                        </a>
                                    </div>
                                    <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.blog-delete', encrypt($blog->id)) }}" method="POST" style="display: none;">
                                        @csrf
                                        {{-- Note: Your route list shows POST for delete, so method spoofing might not be needed, but check web.php --}}
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script-area')
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{asset('backend/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/scripts/forms/form-select2.js')}}"></script>
    <script>
        if(typeof ClassicEditor !== 'undefined'){
            ClassicEditor.create( document.querySelector( '#blog_description' ) )
                .catch( error => { console.error( error ); } );
        }
    </script>
@endsection