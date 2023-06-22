@extends('layouts.admin-dash-layout')
@section('title','search')

@section('content')

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>admin_id</th>
                    <th>description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->id}} <br></td>
                    <td>{{$item->name }} <br></td>
                    <td>{{$item->admin_id }} <br></td>
                    <td>{{$item->description}} <br></td>
                    <td><a href="{{ url('modifyOffice',$item->id)}}" class="btn btn-primary m-2">Edit</a><a href="{{url('deleteOffice',$item->id)}}" class="btn btn-danger">Delete</a></td>
                        
                </tr>
            @endforeach
            </tbody>
        </table> 
    </div>

@endsection
