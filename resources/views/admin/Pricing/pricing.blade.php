@extends('admin.includes.layout')
@section('title', 'Pricing')
@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/forms/select/select2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>
                Add New Service
            </h3>
        </div>
        <div class="card-body">
            <form class="needs-validation"
                action="{{ isset($editservice) ? route('admin.pricing.update', $editservice->id) : route('admin.pricing.store') }}"
                method='post' enctype="multipart/form-data">
                @if (isset($editservice))
                    @method('patch')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="basic-addon-name">Title</label>
                        <input type="text" id="basic-addon-name" value="{{ $editservice->title ?? '' }}"
                            name='service_title' class="form-control" value="" placeholder="Enter Title"
                            aria-label="service_title" aria-describedby="basic-addon-title" required />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="service_img">Icon</label>
                        <input type="file" name='fa_icon' id="fa_icon" placeholder="Enter icon code"
                            value="{{ $editservice->pic ?? '' }}" class="form-control " aria-label=""
                            aria-describedby="service_img" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="sequence">Sequence Service</label>
                        <select class="form-control" id="sequence" name="sequence">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="service_img">service image</label>
                        <input type="file" name='service_img' id="service_img" class="form-control"
                            aria-describedby="service_img" />
                    </div>

                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="meta_title">Meta Title</label>
                        <input type="text" name='meta_title' id="meta_title" placeholder="Enter meta title"
                            value="{{ $editservice->meta_title ?? '' }}" class="form-control " aria-label=""
                            aria-describedby="meta_title" />
                    </div>
                    <div class="col-md-6 mb-1">
                        <label class="form-label" for="slug">Slug</label>
                        <input type="text" name='slug' id="slug" placeholder="Enter meta title"
                            value="{{ $editservice->slug ?? '' }}" class="form-control " aria-label=""
                            aria-describedby="slug" />
                    </div>
                    <div class="col-md-12 mb-1">
                        <label class="form-label" for="meta_title">Meta Keyword</label>
                        <input type="text" name='meta_keyword' id="meta_keyword" placeholder="Enter meta keyword"
                            value="{{ $editservice->meta_keyword ?? '' }}" class="form-control " aria-label=""
                            aria-describedby="meta_keyword" />
                    </div>
                    <div class="col-md-12 mb-1">
                        <label class="form-label" for="meta_desc">Meta Description</label>
                        <textarea name='meta_desc' id="meta_desc" placeholder="Enter meta description" class="form-control " aria-label=""
                            aria-describedby="meta_desc">{{ $editservice->meta_description ?? '' }}
                    </textarea>
                    </div>
                    <div class="col-md-12  mb-1">
                        <label class="form-label" for="basic-addon-name">Short Description</label>
                        <textarea name="service_description" id="service_description" class="form-control " cols="70" rows="2">{{ $editservice->description ?? '' }}</textarea>
                    </div>
                    <div class="col-md-12  mb-1">
                        <label class="form-label" for="basic-addon-name">Long Description</label>
                        <textarea name="full_description" id="editor" class="form-control " cols="70" rows="2">{!! $editservice->full_description ?? '' !!}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">{{ isset($editservice) ? 'Update' : 'Add' }}</button>
                    </div>

                </div>

            </form>
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
    <script>
        ClassicEditor.create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
