@extends('layouts.admin-dash-layout')
@section('title','user')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12" style="padding: 20px;">
            <div class="card">
                <div class="card-header"> image</div>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/addUser" class="btn btn-success btn-sm">Add New</a><br><br>
                    <div class="table-responsive">
                        <table class="table">                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>tell</th>
                                    <th>photo</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($admin as $item)
                                <tr>
                                    <td>{{$item->id}} <br></td>
                                    <td>{{$item->name }} <br></td>
                                    <td>{{$item->tell}} <br></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection