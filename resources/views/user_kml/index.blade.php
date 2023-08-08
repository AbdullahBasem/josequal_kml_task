@extends('layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Kml Files</h1>
        <a href="{{route('kml.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New Kml</a>
    </div>
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Index</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php($i = 0)
                    @foreach($files as $file)
                        @php($i ++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$file->title}}</td>
                            <td>{{$file->created_at}}</td>
                            <td>
                                <a href="{{route('kml.view' , $file->id)}}" class="btn btn-info">
                                    <li class="fa fa-eye"></li>
                                    View</a>

                                <a href="{{route('kml.delete' , $file->id)}}" class="btn btn-danger">
                                    <li class="fa fa-trash"></li>
                                    Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
