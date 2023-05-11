@extends('layouts.admin-dash-layout')
@section('title','addUser')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New User</div>
            @if(Session::has('success'))
                <div class="alert alert-succes" role="alert">
                    {{Session::get('success')}}  
                </div>
            @endif
            <div class="card-body">
            <form action="{{url('ajout')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"><br>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <label for="">email</label><br>
                <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}"><br>
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <label for="">password</label><br>
                <input type="text" name="password" id="password" class="form-control" value="{{old('password')}}"><br>
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <!-- <input type="file" name="photo" id="photo" class="form-control"><br> -->


                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection