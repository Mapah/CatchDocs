@extends('layouts.admin-dash-layout')
@section('title','modifyAdministration')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Modify office Information</div>
            <div class="card-body">
            <form action="{{url('update')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{$office->name}}"><br>
                <input type="hidden" name="id" id="id" class="form-control" value="{{$office->id}}"><br>
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" value="{{$office->name}}"><br>


                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection