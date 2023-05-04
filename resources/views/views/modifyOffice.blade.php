@extends('layouts.admin-dash-layout')
@section('title','modifyOffice')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Modify office Information</div>
            <div class="card-body">
            <form action="{{url('updateOffice')}}" method="get" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <input type="hidden" name="id" id="id" class="form-control" value="{{$data->id}}"><br>

                <label for="">name</label><br>
<<<<<<< HEAD:resources/views/views/modifyOffice.blade.php
                <input type="text" name="name" id="name" class="form-control" 
                {{-- value="{{$office->name}}" --}}
                ><br>
                <input type="hidden" name="id" id="id" class="form-control" 
                {{-- value="{{$office->id}}" --}}
                ><br>
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" 
                {{-- value="{{$office->name}}" --}}
                ><br>
=======
                <input type="text" name="name" id="name" class="form-control" value="{{$data->name}}"><br>   
                <label for="">admin_id</label><br>
                <input type="text" name="admin_id" id="admin_id" class="form-control" value="{{$data->name}}"><br>             
                 <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" value="{{$data->name}}"><br>
>>>>>>> mapah:resources/views/modifyOffice.blade.php


                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection