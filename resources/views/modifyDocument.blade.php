@extends('layouts.admin-dash-layout')
@section('title','modifyDocument')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Modify Document Information</div>
            <div class="card-body">
            <form action="{{url('updateDocument')}}" method="post" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <input type="hidden" name="id" id="id" class="form-control" value="{{$data->id}}"><br>
                
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}"><br>
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" value="{{$data->description}}"><br>
                <label for="">path</label><br>
                <input type="text" name="path" id="path" class="form-control" value="{{$data->path}}"><br>
                <label for="">title</label><br>
                <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}"   ><br>
                <label for="">tags</label><br>
                <input type="text" name="tags" id="tags" class="form-control" value="{{$data->tags}}"><br>
                <label for="">annotations</label><br>
                <input type="text" name="annotations" id="annotations" class="form-control" value="{{$data->annotations}}"><br>
                <label for="">offices_id</label><br>
                <input type="text" name="offices_id" id="offices_id" class="form-control" value="{{$data->offices_id}}"><br>

                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection