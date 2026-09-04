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
                    <input type="text" id="work_title" value="{{ $editwork->title ?? '' }}" name='work_title' class="form-control"
                        placeholder="Enter Title" required />
                </div>

                {{-- Category --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="category">Category</label>
                    <select name='category' id="category" class="form-control" required>
                        <option value="LNMU University Portals & ERP" {{ (isset($editwork) && $editwork->category == 'LNMU University Portals & ERP') ? 'selected' : '' }}>LNMU University Portals & ERP</option>
                        <option value="College & Institute Portals" {{ (isset($editwork) && $editwork->category == 'College & Institute Portals') ? 'selected' : '' }}>College & Institute Portals</option>
                        <option value="SaaS & Enterprise ERP" {{ (isset($editwork) && $editwork->category == 'SaaS & Enterprise ERP') ? 'selected' : '' }}>SaaS & Enterprise ERP</option>
                        <option value="Mobile Apps & Smart Automation" {{ (isset($editwork) && $editwork->category == 'Mobile Apps & Smart Automation') ? 'selected' : '' }}>Mobile Apps & Smart Automation</option>
                        <option value="E-Commerce & Digital Platforms" {{ (isset($editwork) && $editwork->category == 'E-Commerce & Digital Platforms') ? 'selected' : '' }}>E-Commerce & Digital Platforms</option>
                    </select>
                </div>

                {{-- Featured Display Order (Priority on Top) --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="featured_order">Display Priority / Order <span class="text-danger">(Lower Number = Shown on Top, e.g. 1, 2, 3)</span></label>
                    <input type="number" id="featured_order" value="{{ $editwork->featured_order ?? 100 }}" name='featured_order' class="form-control"
                        placeholder="e.g. 1 for Top, 2 for 2nd..." min="1" />
                </div>

                {{-- Live Project / Website URL --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="live_url">Live Project / Website URL <span class="text-muted">(optional)</span></label>
                    <input type="url" id="live_url" value="{{ $editwork->live_url ?? '' }}" name='live_url' class="form-control"
                        placeholder="https://example.com" />
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