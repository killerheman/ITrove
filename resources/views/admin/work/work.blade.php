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
                    <label class="form-label" for="basic-addon-name">Technology</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->technology??''}}" name='technology' class="form-control"
                        value="" placeholder="Enter Technology"
                        aria-label="technology" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Time Period</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->time_period??''}}" name='time_period' class="form-control"
                        value="" placeholder="Enter Time Period"
                        aria-label="time_period" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Website</label>
                    <input type="url" id="basic-addon-name" value=" {{$editwork->website??''}}" name='website' class="form-control"
                        value="" placeholder="Enter Website Url"
                        aria-label="website" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-6 mb-1">
                    <label class="form-label" for="basic-addon-name">Result</label>
                    <input type="text" id="basic-addon-name" value=" {{$editwork->result??''}}" name='result' class="form-control"
                        value="" placeholder="Enter Result"
                        aria-label="result" aria-describedby="basic-addon-title" required />
                </div> 
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Short Description</label>
                    <textarea name="short_description" id="short_description"  class="form-control " cols="70" rows="2"> {{$editwork->short_description??''}}</textarea>
                   
                </div>
                <div class="col-md-12  mb-1">
                    <label class="form-label" for="basic-addon-name">Full Description</label>
                    <textarea name="full_description" id="editor"  class="form-control " cols="70" rows="2"> {{$editwork->full_desription??''}}</textarea>
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

{{-- Manage Work --}}
<div class="card">
    <div class="card-header">
        <h3>Manage works</h3>
    </div>
    <div class="card-body" style="overflow-y: auto;">
        <table class="datatables-basic table datatable ">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Technology</th>
                    <th>Time Proid</th>
                    <th>Result</th>
                    <th>Short Description</th>  
                    <th>Full Description</th>  
                    <th>Action</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($work as $work)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>
                            <img src="{{ asset($work->image) }}" class="me-75 bg-light-danger"
                                style="height:60px;width:60px;" />
                        </td>
                        <td>{{ $work->title ??'' }}</td>
                        <td>{{ $work->technology??'' }}</td>
                        <td>{{ $work->time_period ??''}}</td>
                        <td>{{ $work->result ??''}}</td>
                        <td>{{ $work->short_description??'' }}</td>
                        <td>{!! $work->full_desription!!}</td>
                        <td>
                          
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @php $sid=Crypt::encrypt($work->id); @endphp

                                    <a class="dropdown-item" href="{{ route('admin.work.edit', $sid) }}"><i
                                        class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Edit</span>
                                </a>

                                    <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{ $sid }}').submit();"><i
                                        class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Delete</span>
                                    </a>
                                </div>
                            </div>
                        </td>

                    </tr>

                    <form id="delete-form-{{ $sid }}" action="{{ route('admin.work.destroy', $sid) }}"
                        method="delete" style="display: none;">
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
         ClassicEditor.create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>
    
@endsection