<!doctype html>
@extends('creatorlayout.master')
@extends('creatorlayout.sidebar')




<html class="no-js" lang="en">

<head>
        <title>CMS Admin</title>
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
                            <h4 class="page-title pull-left"><b>Creator Profile</b></h4>   
                        </div>
                    </div>
      
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rajan Das Gupta<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                               
                                <a class="dropdown-item" href="/login">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>  
  
        <hr>
        <hr>

        
        
            <div class="container">
                <table class="table table-hover  ">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">User Type</th>
                        <th scope="col">Profile Image</th>
                        <th scope="col">Edit</th>
                        
                      
                        
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($Loguser as $index)
                        <tr>
                            <th>{{$index->userid}}</th>
                            <th>{{$index->username}}</th>
                            <th>{{$index->name}}</th>
                            <th>{{$index->email}}</th>
                            <th>{{$index->password}}</th>
                            <th>{{$index->phoneno}}</th>
                            <th>{{$index->type}}</th>
                    
                            {{-- <th>{{$imageshow->image}}</th> --}}
                            <th> <img src="{{asset('/storage/'.$index->profilepic)}}" width="100px" height="100px" alt="Image"></th>
                            <th> <a href="/editprofile/{{$index->userid}}" class="btn btn-success">Edit</a> </th>
                           
                          </tr> 
                        @endforeach
                    </tbody>

                        
                      
                    </tbody>
                  </table>             
            </div>

            
    </div>
  
	@endsection

</body>

</html>
