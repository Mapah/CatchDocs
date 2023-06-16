@extends('layouts.admin-dash-layout')
@section('title','addAdministration')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New addministrator</div>
            @if(Session::has('success'))
                <div class="alert alert-succes" role="alert">
                    {{Session::get('success')}}  
                </div>
            @endif
            <div class="card-body">
            <form action="{{url('saveAdministration')}}" method="get" enctype="multipart/form-data" >
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"><br>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}"><br>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror

                <label for="">user_id</label><br>
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{old('user_id')}}"><br>
                @error('user_id')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror

                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection
