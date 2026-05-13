@extends('admin.includes.layout')

@section('title', 'Blog Management')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/forms/select/select2.min.css') }}">
    <style>
        .form-label { font-weight: 600; color: #5e5873; }
        .card-title { font-weight: 700 !important; color: #5e5873; }
        .ck-editor__editable { min-height: 250px; }
        .table thead th { background-color: #f3f2f7 !important; text-transform: uppercase; font-size: 0.85rem; }
    </style>
@endsection

@section('content')

    <div class="card shadow-sm">
        <div class="card-header border-bottom">
            <h4 class="card-title">
                <i class="feather icon-plus-circle mr-50 text-primary"></i>
                {{ isset($editBlog) ? 'Update Blog' : 'Add New Blog' }}
            </h4>
        </div>
        <div class="card-body pt-2">
            <form class="needs-validation"
                action="{{ isset($editBlog) ? route('admin.blog-update', encrypt($editBlog->id)) : route('admin.blog-store') }}"
                method="post" enctype="multipart/form-data">
                
                @csrf
                @if (isset($editBlog))
                    @method('patch')
                @endif

                <div class="row">
                    <div class="col-12 mb-2">
                        <label class="form-label" for="blog_title">Title / Heading <span class="text-danger">*</span></label>
                        <input type="text" id="blog_title" name="blog_title" class="form-control form-control-lg"
                            value="{{ isset($editBlog) ? $editBlog->blog_title : old('blog_title') }}" 
                            placeholder="Enter Blog Title" required />
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_category_id">Category</label>
                        <select class="form-control select2" id="blog_category_id" name="blog_category_id" required>
                            <option selected disabled value="">--Select Category--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ (isset($editBlog) && $editBlog->blog_category_id == $category->id) ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="blog_img">Featured Image</label>
                        <div class="custom-file">
                            <input type="file" name='blog_img' id="blog_img" class="custom-file-input" accept="image/*">
                            <label class="custom-file-label" for="blog_img">Choose image...</label>
                        </div>
                        @if (isset($editBlog))
                            <div class="mt-1">
                                <img src="{{ asset($editBlog->blog_img) }}" class="rounded shadow-sm" style="height:60px;width:60px;object-fit:cover;">
                                <input type="hidden" name="old_img" value="{{ $editBlog->blog_img }}"/>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="create_date">Created Date</label>
                        <input type="date" name='create_date' id="create_date" class="form-control"
                            value="{{ isset($editBlog) ? $editBlog->create_date : old('create_date') }}" required />
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">Slug</label>
                        <input type="text" name='slug' value="{{ $editBlog->slug ?? '' }}" class="form-control" placeholder="blog-unique-slug" />
                    </div>

                    <div class="col-12 mt-1 mb-1">
                        <h5 class="text-primary font-weight-bold"><i class="feather icon-search"></i> SEO Details</h5>
                        <hr class="mt-0">
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name='meta_title' value="{{ $editBlog->meta_title ?? '' }}" class="form-control" placeholder="Meta Title" />
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Keyword</label>
                        <input type="text" name='meta_keyword' value="{{ $editBlog->meta_keyword ?? '' }}" class="form-control" placeholder="Keywords" />
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Description</label>
                        <textarea name='meta_desc' class="form-control" rows="2">{{ $editBlog->meta_description ?? '' }}</textarea>
                    </div>

                    <div class="col-md-12 mb-2">
                        <label class="form-label">Full Blog Description</label>
                        <textarea name="blog_description" id="blog_description" class="form-control">{!! $editBlog->blog_description ?? '' !!}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                            <i class="feather icon-save mr-25"></i> {{ isset($editBlog) ? 'Update Post' : 'Save Blog' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-3 shadow-sm">
    <div class="card-header border-bottom">
        <h4 class="card-title">Manage Existing Blogs</h4>
    </div>
    <div class="card-body pt-2">
        <div class="table-responsive">
            <!-- 1. Table mein ID 'blogTable' add ki gayi hai -->
            <table id="blogTable" class="datatables-basic table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Image</th>
                        <th>Blog Info</th>
                        <th>Category</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        @php $bid = encrypt($blog->id); @endphp
                        <tr>
                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">
                                <img src="{{ asset($blog->blog_img) }}" class="rounded shadow-sm" style="height:50px;width:75px;object-fit:cover;border:1px solid #ebe9f1;" />
                            </td>
                            <td class="align-middle">
                                <div class="font-weight-bold text-dark">{{ $blog->blog_title }}</div>
                                <small class="text-muted"><i class="feather icon-calendar"></i> {{ date('d M, Y', strtotime($blog->create_date)) }}</small>
                            </td>
                            <td class="align-middle">
                                <span class="badge badge-light-info">{{ $blog->blogCategory->category_name ?? 'N/A' }}</span>
                            </td>
                            <td class="text-center align-middle">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.blog-edit', $bid) }}" class="btn btn-icon btn-flat-primary" title="Edit">
                                        <i class="feather icon-edit-2"></i>
                                    </a>
                                    <button type="button" class="btn btn-icon btn-flat-danger ml-50" 
                                            onclick="if(confirm('Delete this blog?')){ document.getElementById('delete-form-{{ $blog->id }}').submit(); }" title="Delete">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                                <form id="delete-form-{{ $blog->id }}" action="{{ route('admin.blog-delete', $bid) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script-area')
    <!-- Datatable JS -->
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            // 2. DataTable Initialization
            if ($('#blogTable').length) {
                $('#blogTable').DataTable({
                    "columnDefs": [
                        { "orderable": false, "targets": [1, 4] } // Image aur Action column par sorting off
                    ],
                    "order": [[0, "asc"]],
                    "dom": '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    "language": {
                        "paginate": {
                            "previous": "&nbsp;",
                            "next": "&nbsp;"
                        }
                    }
                });
            }

            // 3. CKEditor Initialization
            if (document.querySelector('#blog_description')) {
                ClassicEditor
                    .create(document.querySelector('#blog_description'), {
                        toolbar: {
                            items: [
                                'undo', 'redo', '|',
                                'heading', '|',
                                'bold', 'italic', 'underline', '|',
                                'link', 'uploadImage', 'insertTable', 'blockQuote', 'mediaEmbed', '|',
                                'bulletedList', 'numberedList', 'outdent', 'indent', '|',
                                'fontSize', 'fontColor', 'alignment'
                            ],
                            shouldNotGroupWhenFull: true
                        },
                        table: {
                            contentToolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
                        }
                    })
                    .then(editor => {
                        editor.editing.view.change(writer => {
                            writer.setStyle('min-height', '200px', editor.editing.view.document.getRoot());
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    </script>
    
    <style>
        /* Datatable Styling */
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 1rem;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0;
        }
        
        /* Editor Styling */
        .ck-editor__editable_inline {
            border-radius: 0 0 4px 4px !important;
            border-color: #d8d6de !important;
        }
        .ck-toolbar {
            border-radius: 4px 4px 0 0 !important;
            background-color: #f8f8f8 !important;
        }
    </style>
@endsection