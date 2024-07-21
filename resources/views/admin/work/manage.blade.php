@extends('admin.includes.layout')

@section('title', 'Blog')

@section('head-area')
    
@endsection


@section('content')
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
                    <th>ThumbNail</th>
                    <th>Screen shot Image</th>
                    <th>Title</th>
                    <th>Technology</th>
                    <th>Slug</th>
                    <th>Meta Title</th>
                    <th>Meta Keyword</th>
                    <th>Meta Description</th>
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
                        <td>
                            <img src="{{ asset($work->thumbnail) }}" class="me-75 bg-light-danger"
                                style="height:60px;width:60px;" />
                        </td>
                        
                        <td>
                        @php
                            $images_data=json_decode($work->screenshot_img);
                        @endphp
                        @foreach ( $images_data as $img)                          
                            <img src="{{asset($img)}}" class="me-75 bg-light-danger"
                            style="height:60px;width:60px;" /> 
                        @endforeach
                        </td>
                        <td>{{ $work->title ??'' }}</td>
                        <td>{{ $work->technology??'' }}</td>
                        <td>{{ $work->slug ??''}}</td>
                        <td>{{ $work->meta_title ??''}}</td>
                        <td>{{ $work->meta_keyword ??''}}</td>
                        <td>{{ $work->meta_description ??''}}</td>
                        <td>{{ $work->short_description??'' }}</td>
                        <td>{!! $work->full_description!!}</td>
                        <td>
                          
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-settings"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    @php $sid=Crypt::encrypt($work->id); @endphp

                                    <a class="dropdown-item" href="{{ route('admin.work.edit', $work->slug) }}"><i
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