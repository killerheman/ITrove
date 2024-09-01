@extends('admin.includes.layout')

@section('title', ' Add Work')

@section('head-area')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3>
                Add New Work
        </h3>
    </div>
    <div class="card-body">
        {{-- {{isset($editwork)?route('admin.work.update',Crypt::encrypt($editwork->id)):route('admin.work.store') }} --}}
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
                    <input type="text" id="basic-addon-name" value=" {{$editwork->title??''}}" name='work_title' class="form-control"
                        value="" placeholder="Enter Title"
                        aria-label="work_title" aria-describedby="basic-addon-title" required />
                       
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="work_img">Image</label>
                    <input type="file" name='work_img' id="work_img" class="form-control " aria-label=""
                        aria-describedby="work_img" />
                        @if (isset($editwork))
                        <div class="col-sm-6">
                            <img src="{{asset($editwork->image ??'') }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="thumbnail">Thumb Nail</label>
                    <input type="file" name='thumbnail' id="thumbnail" class="form-control " aria-label=""
                        aria-describedby="thumbnail" />
                        @if (isset($editwork))
                        <div class="col-sm-6">
                            <img src="{{asset($editwork->thumbnail ??'') }}" class="bg-light-info" alt="" style="height:100px;width:100px;">
                        </div>
                    @endif
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="screenshot_img">images</label>
                    <input type="file" name='screenshot_img[]' id="screenshot_img" class="form-control " aria-label=""
                        aria-describedby="screenshot_img" multiple />
                        @if (isset($editwork))
                        <div class="col-sm-6">
                            @php
                            $images_data=json_decode($editwork->screenshot_img);
                         @endphp
                            @foreach ( $images_data as $img)                          
                            <img src="{{asset($img)}}" class="me-75 bg-light-danger"
                            style="height:60px;width:60px;" /> 
                        @endforeach
                          
                        </div>
                    @endif
                </div>
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Technology</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->technology??''}}" name='technology' class="form-control"
                        value="" placeholder="Enter Technology"
                        aria-label="technology" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Slug</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->slug??''}}" name='slug' class="form-control"
                        value="" placeholder="Enter Slug"
                        aria-label="time_period" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Meta Tiltle</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->meta_title??''}}" name='meta_title' class="form-control"
                        value="" placeholder="Enter meta title"
                        aria-label="result" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Meta Keyword</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->meta_keyword??''}}" name='meta_keyword' class="form-control"
                        value="" placeholder="Enter Meta Keyword"
                        aria-label="website" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Meta Description</label>
                    <textarea name="meta_description" id="meta_description"  class="form-control " cols="70" rows="2"> {{$editwork->meta_description??''}}</textarea>
                   
                </div>
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Short Description</label>
                    <textarea name="short_description" id="short_description"  class="form-control " cols="70" rows="2"> {{$editwork->short_description??''}}</textarea>
                   
                </div>
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Full Description</label>
                    <textarea name="full_description" id="editor"  class="form-control " cols="70" rows="2"> {!!$editwork->full_desription??''!!}</textarea>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <button type="submit"
                        class="btn btn-primary waves-effect waves-float waves-light"> {{isset($editwork)?'Update':'Add'}}</button>
                       
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
    <script src="{{asset('backend/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/scripts/forms/form-select2.js')}}"></script>
    <script>
         ClassicEditor.create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>
    
@endsection