@extends('layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Kml</h1>
    </div>
    <div class="card shadow mb-4">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <div class="card-body">
            <form action="{{route('kml.add')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">KML File</label>
                        <input class="form-control" name="kml_file" type="file" id="formFile"  accept=".kml">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
