@extends('layouts.admin-dash-layout')
@section('title','Administration')

@section('content')

<div class="container"><br><br><br>
        <!-- SEARCH FORM -->
    <form action="{{url('searchAdministration')}}" method="get" role="search" class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" name="searchAdmin" type="search" id="search" placeholder="Search" aria-label="Search">
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
                <div class="card-header"> Table Of Administrators</div>
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/addAdministration" class="btn btn-success btn-sm">Add New</a><br><br>
                    @if(Session::has('success'))
                        <div class="alert alert-succes" role="alert">
                            {{Session::get('success')}}  
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>description</th>
                                        <th>user_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                        <tr>
                                        <td>{{$item->id}} <br></td>
                                            <td>{{$item->name }} <br></td>
                                            <td>{{$item->description}} <br></td>
                                            <td>{{$item->user_id}} <br></td>
                                            <td><a href="{{ url('modifyAdministration',$item->id)}}" class="btn btn-primary m-2">Edit</a><a href="{{url('deleteAdministration',$item->id)}}" class="btn btn-danger">Delete</a></td>        
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