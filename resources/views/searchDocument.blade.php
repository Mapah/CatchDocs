@extends('layouts.admin-dash-layout')
@section('title','search')

@section('content')
    <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Path</th>
                <th>Title</th>
                <th>Tags</th>
                <th>Annotations</th>
                <th>Offices_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($document as $item)
                <tr>
                    <td>{{$item->id}} <br></td>
                    <td>{{$item->name}} <br></td>
                    <td>{{$item->description}} <br></td>
                    <td>{{$item->path}} <br></td>
                    <td>{{$item->title}} <br></td>
                    <td>{{$item->tags}} <br></td>
                    <td>{{$item->annotations}} <br></td>
                    <td>{{$item->offices_id}} <br></td>
                    <td><a href="{{ url('modifyDocument',$item->id)}}" class="btn btn-primary m-2">Edit</a><a href="{{url('deleteDocument',$item->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table> 


@endsection
