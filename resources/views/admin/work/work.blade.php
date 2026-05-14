@extends('admin.includes.layout')

@section('title', isset($editwork) ? 'Update Work' : 'Add Work')

@section('header-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ isset($editwork) ? 'Update Work' : 'Add New Work' }}</h3>
    </div>
    <div class="card-body">
        <form class="needs-validation"
            action="{{ isset($editwork) ? route('admin.work.update', Crypt::encrypt($editwork->id)) : route('admin.work.store') }}"
            method="post" enctype="multipart/form-data">
            
            @csrf
            @if (isset($editwork))
                @method('PUT')
            @endif

            <div class="row">
                {{-- Title --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="work_title">Title</label>
                    <input type="text" id="basic-addon-name" value="{{ $editwork->title ?? '' }}" name='work_title' class="form-control"
                        placeholder="Enter Title" required />
                </div>
                
                {{-- MAIN IMAGE --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="work_img">Main Image</label>
                    <input type="file" name='work_img' id="work_img" class="form-control" {{ isset($editwork) ? '' : 'required' }} />
                    @if (isset($editwork) && $editwork->image)
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $editwork->image) }}" class="rounded bg-light-info" alt="" style="height:80px;width:80px;object-fit:cover;">
                        </div>
                    @endif
                </div>

                {{-- THUMBNAIL --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="thumbnail">Thumbnail</label>
                    <input type="file" name='thumbnail' id="thumbnail" class="form-control" />
                    @if (isset($editwork) && $editwork->thumbnail)
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $editwork->thumbnail) }}" class="rounded bg-light-info" alt="" style="height:80px;width:80px;object-fit:cover;">
                        </div>
                    @endif
                </div>

                {{-- SCREENSHOTS --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="screenshot_img">Screenshots (Multiple)</label>
                    <input type="file" name='screenshot_img[]' id="screenshot_img" class="form-control" multiple />
                    @if (isset($editwork) && $editwork->screenshot_img)
                        <div class="mt-1">
                            @php $images_data = json_decode($editwork->screenshot_img, true); @endphp
                            @if(is_array($images_data))
                                @foreach ($images_data as $img)
                                    <img src="{{ asset('storage/' . $img) }}" class="me-50 rounded bg-light-danger" style="height:50px;width:50px;object-fit:cover;" />
                                @endforeach
                            @endif
                        </div>
                    @endif
                </div>

                {{-- Technology --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label">Technology</label>
                    <input type="text" name='technology' value="{{ $editwork->technology ?? '' }}" class="form-control" placeholder="e.g. Laravel, React" required />
                </div>

                {{-- Slug --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="slug_input">Slug (URL)</label>
                    <input type="text" name='slug' value="{{ $editwork->slug ?? '' }}" class="form-control" placeholder="auto-generated-if-empty" />
                </div>

                {{-- SEO Fields --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name='meta_title' value="{{ $editwork->meta_title ?? '' }}" class="form-control" placeholder="Meta Title" required />
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label">Meta Keyword</label>
                    <input type="text" name='meta_keyword' value="{{ $editwork->meta_keyword ?? '' }}" class="form-control" placeholder="Meta Keywords" required />
                </div>
                
                <div class="col-md-12 mb-1">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2" required>{{ $editwork->meta_description ?? '' }}</textarea>
                </div>

                <div class="col-md-12 mb-1">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="2" required>{{ $editwork->short_description ?? '' }}</textarea>
                </div>

                <div class="col-md-12 mb-1">
                    <label class="form-label">Full Description</label>
                    <textarea name="full_description" id="editor" class="form-control">{{ $editwork->full_description ?? '' }}</textarea>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        {{ isset($editwork) ? 'Update Work' : 'Add Work' }}
                    </button>
                    <a href="{{ route('admin.work.index') }}" class="btn btn-outline-secondary ml-1">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script-area')
    {{-- CKEditor (Jo pehle se chal raha tha) --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    
    <script>
        // 1. CKEditor Initialization
        if(document.querySelector('#editor')){
            ClassicEditor.create(document.querySelector('#editor')).catch(error => { console.error(error); });
        }

        // 2. AUTO SLUG GENERATION (Pure JavaScript - Sabse Fast)
        document.addEventListener('DOMContentLoaded', function() {
            const titleInput = document.getElementById('work_title');
            const slugInput = document.getElementById('slug_input');

            if(titleInput && slugInput) {
                titleInput.addEventListener('keyup', function() {
                    let text = this.value;
                    let slug = text.toLowerCase()
                                   .trim()
                                   .replace(/[^\w\s-]/g, '')     // Special chars hataye
                                   .replace(/[\s_-]+/g, '-')     // Spaces ko hyphen mein badle
                                   .replace(/^-+|-+$/g, '');     // Start/End ke hyphen hataye
                    
                    slugInput.value = slug;
                });
            }
        });
    </script>
@endsection