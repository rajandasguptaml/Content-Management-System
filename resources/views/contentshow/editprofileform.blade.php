<!doctype html>
@extends('creatorlayout.master')
@extends('creatorlayout.sidebar')


<html class="no-js" lang="en">

<head>
        <title>CMS Creator</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                            <h4 class="page-title pull-left"><b>Update Profile</b></h4>  
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
            </div>
            
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status')}}</h6>
                
            @endif

            <div class="container">
  


        @foreach ($Loguser as $err)

        <li>{{$err}}</li>


                <form  method="post" enctype="multipart/form-data">
              
                    @csrf

                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name</label>
                      <input type="text" name="username" class="form-control" value="{{$Loguser->username}}" placeholder="Enter Title">   
                      
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="title" class="form-control"value="{{$Loguser->name}}"  placeholder="Enter Title">   
                        
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" name="password" class="form-control" value="{{$Loguser->password}}" placeholder="Enter Title">   
                        
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$Loguser->email}}" placeholder="Enter Title">   
                        
                      </div>

                    <div class="form-group">
                      <label >Contact Number</label>
                      <input type="text" name="phoneno" class="form-control" value="{{$Loguser->phoneno}}" placeholder="Enter Discription">
                      
                    </div>

                    <div class="form-group">
                        <label >Type</label>
                        <input type="text" name="type" class="form-control" value="{{$Loguser->type}}" placeholder="Enter Discription">
                        
                      </div>

                    <div class="form-group">
                        <label >Profile Picture</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputGroupFile03">Choose File</label>
                        <input type="file" name="profilepic" value="{{$Loguser->profilepic}}" class="custom-file-input" id="inputGroupFile03">

                        
                    </div>
                    </div>
                      
                
                    <input type="submit"  class="btn btn-primary"></input>
              
        
                      
                  </form>
    
              </div>


             
           
    </div>
    @endforeach
    
	@endsection




</body>

</html>
