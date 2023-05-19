@extends('layouts.admin-dash-layout')
@section('title','srearch')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pasword</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $item)
                <tr>
                    <td>{{$item->id}} <br></td>
                    <td>{{$item->name }} <br></td>
                    <td>{{$item->email}} <br></td>
                    <td>{{$item->password}} <br></td>
                    <td><a href="{{ url('modifyUser',$item->id)}}" class="btn btn-primary m-2">Edit</a><a href="{{url('delete',$item->id)}}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
