@extends('layouts.admin-dash-layout')
@section('title','addUser')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New User</div>
            <div class="card-body">
            <form action="{{url('ajout')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">email</label><br>
                <input type="text" name="email" id="email" class="form-control"><br>
                <label for="">password</label><br>
                <input type="text" name="password" id="password" class="form-control"><br>
                <!-- <input type="file" name="photo" id="photo" class="form-control"><br> -->


                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection