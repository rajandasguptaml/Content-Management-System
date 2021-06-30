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
                
                <a href="/jpgshow"> <button type="button" class="btn btn-primary">Create Content</button></a>

              </div>
        
    </div>
  
	@endsection

</body>

</html>
