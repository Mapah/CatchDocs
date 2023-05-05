@extends('layouts.admin-dash-layout')
@section('title','Office')

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
                <div class="card-header"> Table Of Offices</div>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/addOffice" class="btn btn-success btn-sm">Add New</a><br><br>
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
                </div>
            </div>  
        </div>
    </div>
</div>


@endsection
