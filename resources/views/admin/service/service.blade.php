@extends('admin.includes.layout')

@section('title', 'Services Management')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <style>
        .form-label { font-weight: 600; color: #5e5873; }
        .card-title { font-weight: 700 !important; color: #5e5873; }
        .ck-editor__editable_inline { min-height: 250px; border-radius: 0 0 4px 4px !important; }
        .ck-toolbar { border-radius: 4px 4px 0 0 !important; background-color: #f8f8f8 !important; }
    </style>
@endsection

@section('content')

    <div class="card shadow-sm">
        <div class="card-header border-bottom">
            <h4 class="card-title">
                <i class="feather icon-settings mr-50 text-primary"></i>
                {{ isset($editservice) ? 'Update Service' : 'Add New Service' }}
            </h4>
        </div>
        <div class="card-body pt-2">
            
            @if (session('success'))
                <div class="alert alert-success p-1 mb-2">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger p-1 mb-2">
                    <ul class="mb-0">@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                </div>
            @endif

            <form class="needs-validation"
                action="{{ isset($editservice) ? route('admin.service.update', $editservice->id) : route('admin.service.store') }}"
                method='post' enctype="multipart/form-data">
                
                @csrf
                @if (isset($editservice)) @method('patch') @endif

                <div class="row">
                    <div class="col-12 mb-2">
                        <label class="form-label">Service Title <span class="text-danger">*</span></label>
                        {{-- Added id="service_title" here --}}
                        <input type="text" name='service_title' id="service_title" class="form-control form-control-lg" 
                               value="{{ $editservice->title ?? old('service_title') }}" placeholder="e.g. Web Development" required />
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">FontAwesome Icon Code</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="feather icon-flag"></i></span></div>
                            <input type="text" name='fa_icon' value="{{ $editservice->fa_icon ?? old('fa_icon') }}" 
                                   class="form-control" placeholder="fa fa-code" />
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-1">
                        <label class="form-label">Display Sequence</label>
                        <select class="form-control select2" name="sequence">
                           @for ($i = 1; $i <= ($totalServices ?? 10); $i++)
                            <option value="{{ $i }}" {{ (isset($editservice) && $editservice->sequence == $i) ? 'selected' : '' }}>
                                {{ $i }}
                            </option>
                           @endfor 
                        </select>
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">Thumbnail Image</label>
                        <div class="custom-file">
                            <input type="file" name='thumbnail_img' class="custom-file-input" id="thumb">
                            <label class="custom-file-label" for="thumb">Choose thumbnail...</label>
                        </div>
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">Main Service Image</label>
                        <div class="custom-file">
                            <input type="file" name='service_img' class="custom-file-input" id="mainImg">
                            <label class="custom-file-label" for="mainImg">Choose service image...</label>
                        </div>
                    </div>

                    <div class="col-12 mt-1 mb-1">
                        <h5 class="text-primary font-weight-bold"><i class="feather icon-search"></i> SEO & URL Setup</h5>
                        <hr class="mt-0">
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name='meta_title' value="{{ $editservice->meta_title ?? old('meta_title') }}" class="form-control" />
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label">Slug (URL)</label>
                        {{-- Added id="slug_input" here --}}
                        <input type="text" name='slug' id="slug_input" value="{{ $editservice->slug ?? old('slug') }}" class="form-control" placeholder="service-name-slug" />
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Keywords</label>
                        <input type="text" name='meta_keyword' value="{{ $editservice->meta_keyword ?? old('meta_keyword') }}" class="form-control" />
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Meta Description</label>
                        <textarea name='meta_desc' class="form-control" rows="2">{{ $editservice->meta_description ?? old('meta_desc') }}</textarea>
                    </div>

                    <div class="col-md-12 mb-1">
                        <label class="form-label">Short Description</label>
                        <textarea name="service_description" class="form-control" rows="2">{{ $editservice->description ?? old('service_description') }}</textarea>
                    </div>

                    <div class="col-md-12 mb-2">
                        <label class="form-label">Long Description (Full Content)</label>
                        <textarea name="full_description" id="editor" class="form-control">{!! $editservice->full_description ?? '' !!}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                            <i class="feather icon-save mr-25"></i> {{ isset($editservice) ? 'Update Service' : 'Add Service' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script-area')
    <script src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            // Select2 init
            $('.select2').select2();

            // File input update
            $('.custom-file-input').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $(this).siblings('.custom-file-label').addClass("selected").html(fileName);
            });

            // --- AUTO SLUG GENERATION LOGIC ---
            $('#service_title').on('keyup', function() {
                let text = $(this).val();
                let slug = text.toLowerCase()
                               .replace(/[^\w ]+/g, '') // Special chars hataye
                               .replace(/ +/g, '-');    // Spaces ko dash (-) mein badle
                $('#slug_input').val(slug);
            });

            // CKEditor with Full Toolbar
            if (document.querySelector('#editor')) {
                ClassicEditor.create(document.querySelector('#editor'), {
                    toolbar: {
                        items: [
                            'undo', 'redo', '|', 'heading', '|', 'bold', 'italic', 'underline', '|',
                            'link', 'insertTable', 'blockQuote', '|',
                            'bulletedList', 'numberedList', 'outdent', 'indent', '|',
                            'fontSize', 'fontColor', 'alignment'
                        ],
                        shouldNotGroupWhenFull: true
                    }
                }).then(editor => {
                    editor.editing.view.change(writer => {
                        writer.setStyle('min-height', '250px', editor.editing.view.document.getRoot());
                    });
                }).catch(error => { console.error(error); });
            }
        });
    </script>
@endsection