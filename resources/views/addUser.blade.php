@extends('layouts.admin-dash-layout')
@section('title','addUser')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New User</div>
            <div class="card-body">
                <form action="{{url('user')}}" method="get" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">tell</label><br>
                <input type="text" name="tell" id="tell" class="form-control"><br>
                <input type="file" name="photo" id="photo" class="form-control"><br>


                <input type="submit" value="save" class="btn btn-success"><br>
 
                </form>
            </div>
        </div>  

    </div>
</div>

@endsection