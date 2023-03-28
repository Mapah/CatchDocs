@extends('layouts.admin-dash-layout')
@section('title','addOffice')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New office</div>
            <div class="card-body">
            <form action="{{url('ajout')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control"><br>

                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection