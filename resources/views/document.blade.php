@extends('layouts.admin-dash-layout')
@section('title','Documents')
@section('content')

<div class="container"><br><br><br>
        <!-- SEARCH FORM -->
    <form action="{{url('searchDocument')}}" method="get" role="search" class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" name="searchDocoment" type="search" id="search" placeholder="Search" aria-label="Search">
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

                <form method="get" action="/selectoffice">
                    <select name="office" class="form-select" aria-label="Office" id="Office" style="width:14%">
                        <option selected disabled>Office</option>
                        @foreach($data1 as $office)
                        <option onchange="" value="{{ $office->id }}">{{ $office->name}}</option>
                        @endforeach
                    </select>

                    <button>Send</button>
                <form>
                    
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/addDocument" class="btn btn-success btn-sm">Add New</a><br><br>
                    <!-- <a href="http://127.0.0.1:8000/addDocument" class="btn btn-success btn-sm">Add New</a><br><br> -->
                    <div class="table-responsive">
                        @if(Session::has('success'))
                            <div class="alert alert-succes" role="alert">
                                {{Session::get('success')}}  
                            </div>
                        @endif
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
                                        <td>
                                        <a href="" class="btn btn-success m-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                        </a>
                                        <a href="{{ url('modifyDocument',$item->id)}}" class="btn btn-primary m-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                 <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                            </svg>
                                        </a>
                                        <a href="{{url('deleteDocument',$item->id)}}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                            </svg>
                                        </a>
                                        </td>

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