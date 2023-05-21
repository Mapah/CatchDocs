@extends('layouts.admin-dash-layout')
@section('title','addOffice')

@section('content')

<div class="container">
    <div class="col-12" style="padding: 20px;">
        <div class="card">
            <div class="card-header">Create New Doccument</div>
            @if(Session::has('success'))
                <div class="alert alert-succes" role="alert">
                    {{Session::get('success')}}  
                </div>
            @endif
            <div class="card-body">
            <form action="{{url('save_addDocument')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <div class="md-3">
                <label for="">name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"><br>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                </div>
                <div class="md-3"></div>
                <label for="">description</label><br>
                <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}"><br>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <div class="md-3"></div>
                <label for="">path</label><br>
                <input type="file" name="path" id="path"  value="{{old('path')}}"><br><br>
                @error('path')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                <div class="md-3">
                <label for="">title</label><br>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}"><br>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                </div>

                <div class="md-3">
                <label for="">tags</label><br>
                <input type="text" name="tags" id="tags" class="form-control" value="{{old('tags')}}"><br>
                @error('tags')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                </div>

                <div class="md-3">
                <label for="">annotations</label><br>
                <input type="text" name="annotations" id="annotations" class="form-control" value="{{old('annotations')}}"><br>
                @error('annotations')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                </div>
                <div class="md-3">
                <label for="">offices_id</label><br>
                <input type="text" name="offices_id" id="offices_id" class="form-control" value="{{old('offices_id')}}"><br>
                @error('offices_id')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}  
                    </div>
                @enderror
                </div>
  

                <input type="submit" value="save" class="btn btn-success"><br>
 
            </form>
            </div>
        </div>  

    </div>
</div>

@endsection