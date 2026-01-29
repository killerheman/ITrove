@extends('admin.includes.layout')

@section('title', 'Add Work')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Add New Work</h3>
    </div>
    <div class="card-body">
        <form class="needs-validation"
        action="{{isset($editwork)?route('admin.work.update',Crypt::encrypt($editwork->id)):route('admin.work.store') }}"
            method='post' enctype="multipart/form-data">
            @if (isset($editwork))
            @method('patch')
            @endif
            @csrf
            <div class="row">
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Title</label>
                    <input type="text" id="basic-addon-name" value="{{ $editwork->title??'' }}" name='work_title' class="form-control"
                        placeholder="Enter Title" aria-label="work_title" required />
                </div>
                
                {{-- MAIN IMAGE - STORAGE FIXED --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="work_img">Image</label>
                    <input type="file" name='work_img' id="work_img" class="form-control" />
                    @if (isset($editwork) && $editwork->image)
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $editwork->image) }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>

                {{-- THUMBNAIL - STORAGE FIXED --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="thumbnail">Thumbnail</label>
                    <input type="file" name='thumbnail' id="thumbnail" class="form-control" />
                    @if (isset($editwork) && $editwork->thumbnail)
                        <div class="mt-1">
                            <img src="{{ asset('storage/' . $editwork->thumbnail) }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>

                {{-- SCREENSHOTS - STORAGE FIXED --}}
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="screenshot_img">Screenshots</label>
                    <input type="file" name='screenshot_img[]' id="screenshot_img" class="form-control" multiple />
                    @if (isset($editwork) && $editwork->screenshot_img)
                        <div class="mt-1">
                            @php $images_data = json_decode($editwork->screenshot_img); @endphp
                            @if($images_data)
                                @foreach ($images_data as $img)
                                    <img src="{{ asset('storage/' . $img) }}" class="me-75 bg-light-danger" style="height:60px;width:60px;" />
                                @endforeach
                            @endif
                        </div>
                    @endif
                </div>

                <div class="col-md-6 mb-1">
                    <label class="form-label" for="technology">Technology</label>
                    <input type="text" name='technology' value="{{ $editwork->technology??'' }}" class="form-control" placeholder="Enter Technology" required />
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" name='slug' value="{{ $editwork->slug??'' }}" class="form-control" placeholder="Enter Slug" required />
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="meta_title">Meta Title</label>
                    <input type="text" name='meta_title' value="{{ $editwork->meta_title??'' }}" class="form-control" placeholder="Enter Meta Title" required />
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="meta_keyword">Meta Keyword</label>
                    <input type="text" name='meta_keyword' value="{{ $editwork->meta_keyword??'' }}" class="form-control" placeholder="Enter Meta Keyword" required />
                </div>
                <div class="col-md-12 mb-1">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2">{{ $editwork->meta_description??'' }}</textarea>
                </div>
                <div class="col-md-12 mb-1">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="2">{{ $editwork->short_description??'' }}</textarea>
                </div>
                <div class="col-md-12 mb-1">
                    <label class="form-label">Full Description</label>
                    <textarea name="full_description" id="editor" class="form-control">{{ $editwork->full_description??'' }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                        {{ isset($editwork) ? 'Update' : 'Add' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script-area')
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{asset('backend/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/scripts/forms/form-select2.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
