@extends('layouts.admin-dash-layout')
@section('title','Documents')
@section('content')

<div class="container"><br><br><br>
        <!-- SEARCH FORM -->
    <form action="{{url('search')}}" method="get" role="search" class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" id="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
    </form>                

    <div class="row">
        <div class="col-12" style="padding: 20px;">
            <div class="card">
                @error('name')
                <div class="alert alert-denger " role="alert">
                    {{$message}}
                </div>
                @enderror
                <div class="card-header"> Table Of Documents</div>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" style=" width:10%">
                    <option selected>Office</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

                <select id="year" style=" width:10%;">
                    <option value="hide">Year</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2011">2011</option>
                </select>
                <div class="card-body">
                    <!-- <a href="http://127.0.0.1:8000/addDocument" class="btn btn-success btn-sm">Add New</a><br><br> -->
                    <div class="table-responsive">
                    @if(Session::has('success'))
                        <div class="alert alert-succes" role="alert">
                            {{Session::get('success')}}  
                        </div>
                     @endif
                        <table class="table">
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
                                @foreach($data as $item)
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
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>


@endsection