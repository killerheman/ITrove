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
                @if(isset($editBlog))
                Update Blog
            @else
                Add New Blog
            @endif
            
            </h3>
        </div>
        <div class="card-body">
            <form class="needs-validation"
            action="{{ isset($editblog) ? route('admin.blog-update',$editblog->slug) :route('admin.blog-store') }}"
                method='post' enctype="multipart/form-data">
                @if (isset($editblog))
                @method('patch')
            @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Title</label>

                        <input type="text" id="basic-addon-name" name="blog_title" class="form-control"
                            value="{{ isset($editBlog) ? $editBlog->blog_title : '' }}" placeholder="Enter Title"
                            aria-label="blog_title" aria-describedby="basic-addon-title" required />

                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_img">Image</label>
                        <input type="file" name='blog_img' id="blog_img" class="form-control " aria-label=""
                            aria-describedby="blog_img" />
                            @if (isset($editBlog))
                            <div class="col-sm-6">
                                <img src="{{asset($editBlog->blog_img)??'' }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                            </div>
                            <input type="hidden"  name="old_img" value="{{$editBlog->blog_img}}"/>

                        @endif
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Created Date</label>
                        <input type="date" id="basic-addon-name" name='create_date' class="form-control"
                            value="{{$editBlog->create_date ?? ''}}" aria-label="blog_title" aria-describedby="basic-addon-create_date" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="desc">Category</label>
                        <select class="form-control select2 form-select" id="blog_category_id"  name="blog_category_id" required>
                            <option selected disabled value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}} " {{isset($editBlog) ?($category->id==$editBlog->blog_category_id ? 'selected' : ''):'' }} >{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" name='meta_title' id="meta_title" placeholder="Enter meta title"  value="{{$editBlog->meta_title??''}}" class="form-control " aria-label=""
                            aria-describedby="meta_title" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="slug">Slug</label>
                        <input type="text" name='slug' id="slug" placeholder="Enter meta title"  value="{{$editBlog->slug??''}}" class="form-control " aria-label=""
                            aria-describedby="slug" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="meta_title">Meta Keyword</label>
                        <input type="text" name='meta_keyword' id="meta_keyword" placeholder="Enter meta keyword"  value="{{$editBlog->meta_keyword??''}}" class="form-control " aria-label=""
                            aria-describedby="meta_keyword" />
                    </div>
                    <div class="col-md-12 mb-1">
                        <label class="form-label" for="meta_desc">Meta Description</label>
                        <textarea name='meta_desc' id="meta_desc" placeholder="Enter meta description"   class="form-control " aria-label=""
                            aria-describedby="meta_desc">
                            {{$editBlog->meta_description??''}}
                        </textarea>
                    </div>
                    <div class="col-md-12 mb-1">
                        <label class="form-label" for="basic-addon-name">Description</label>
                        <textarea name="blog_description"  id="blog_description" cols="70" rows="2">{!!$editBlog->blog_description ??''!!}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit"
                          class="btn btn-primary waves-effect waves-float waves-light">
                            {{ isset($ditBlog) ? 'Update' : 'Add' }}
                        </button>
                
                    </div>
                  
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
                            <td>{!! $blog->blog_description !!}</td>
                            <td>{{ $blog->blogCategory->category_name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-settings"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        {{-- @php $bid=Crypt::encrypt($blog->id); @endphp --}}

                                        <a class="dropdown-item" href="{{ route('admin.blog-edit',$blog->slug) }}"><i
                                            class="me-1" data-feather="check-square"></i><span
                                            class="align-middle">Edit</span>
                                    </a>

                                        <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();document.getElementById('delete-form-{{ $blog->slug }}').submit();"><i
                                            class="me-1" data-feather="message-square"></i><span
                                            class="align-middle">Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>

                        </tr>

                        <form id="delete-form-{{ $blog->slug }}" action="{{ route('admin.blog-delete', $blog->slug) }}"
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
    <script>
        ClassicEditor.create( document.querySelector( '#blog_description' ) )
               .catch( error => {
                   console.error( error );
               } );
   </script>
   
@endsection
