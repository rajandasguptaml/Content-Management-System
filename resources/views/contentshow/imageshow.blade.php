<!doctype html>
@extends('creatorlayout.master')
@extends('creatorlayout.sidebar')


<html class="no-js" lang="en">

<head>
        <title>CMS Photography</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

</head>

<body>

@section('search')
@stop
@section('indexcontent')
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><b>Photography</b></h4>   
                        </div>
                    </div>
      
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rajan Das Gupta<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>  
  

            <div class="container">
                <table class="table table-stripped table-bordered table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Download</th>
                        
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($Creatorimages as $contentshow)
                        <tr>
                            <th>{{$contentshow->id}}</th>
                            <th>{{$contentshow->title}}</th>
                            <th>{{$contentshow->cdescription}}</th>
                            {{-- <th>{{$imageshow->image}}</th> --}}
                            <th> <img src="{{asset('/storage/'.$contentshow->image)}}" width="100px" height="100px" alt="Image"></th>

                            <th> <a href="/editimage/{{$contentshow->id}}" class="btn btn-success">Edit</a> </th>
                            <th> <a href="/view/{{$contentshow->id}}" class="btn btn-info">View</a> </th>
                            <th> <a href="/delete/{{$contentshow->id}}" class="btn btn-danger">Delete</a> </th>
                            <th> <a href="/download/{{$contentshow->image}}" class="btn btn-warning">Download</a> </th>

                          </tr> 
                        @endforeach
                    </tbody>

                        
                      
                    </tbody>
                  </table>             
            </div>

            <div class="container">
                
                <a href="/jpgshow"> <button type="button" class="btn btn-primary">Create Content</button></a>

              </div>
        
    </div>
  
	@endsection

</body>

</html>
