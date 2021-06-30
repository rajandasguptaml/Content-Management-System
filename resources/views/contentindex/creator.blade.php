<!doctype html>
@extends('creatorlayout.master')
@extends('creatorlayout.sidebar')
@php
    use App\Http\Controllers\photocontroller;
@endphp




<html class="no-js" lang="en">

<head>
        <title>CMS Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <style>
            h4 {
              text-align: center;
            }
            </style>
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
                            <h4 class="page-title pull-left"><b>Creator Dashboard</b></h4>   
                        </div>
                    </div>
      
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Rajan Das Gupta<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                                <a class="dropdown-item" href="/logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>  
  
        <hr>
            <h4>ALL Photography  </h4>
        
            <hr>
            <div class="container">
                <table class="table table-stripped table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Image</th>
                        <th scope="col">View</th>
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
                            <th> <a href="/view/{{$contentshow->id}}" class="btn btn-info">View</a> </th>
                            <th> <a href="/download/{{$contentshow->image}}" class="btn btn-warning">Download</a> </th>

                          </tr> 
                        @endforeach
                    </tbody>

                    </tbody>
                  </table>             
            </div>
            <br>
            <br>
            <hr>
            <h4>ALL Cinematography  </h4>
        
            <hr>
            <div class="container">
                <table class="table table-stripped table-bordered table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Video</th>
                        <th scope="col">View</th>
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
                            <th> <img src="{{asset('/storage/'.$contentshow->video)}}" width="100px" height="100px" alt="Image"></th>
                            <th> <a href="/viewvideo/{{$contentshow->id}}" class="btn btn-info">View</a> </th>
                            <th> <a href="/download/{{$contentshow->video}}" class="btn btn-warning">Download</a> </th>

                          </tr> 
                        @endforeach
                    </tbody>

                    </tbody>
                  </table>             
            </div>
            
            <br>
            <br>
        
            <hr>
            <h4>ALL Article  </h4>
        
            <hr>
            <div class="container">
                <table class="table table-stripped table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Discription</th>
                        
                        <th scope="col">View</th>
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
                          
                            <th> <a href="/viewpdf/{{$contentshow->id}}" class="btn btn-info">View</a> </th>
                            <th> <a href="/download/{{$contentshow->pdf}}" class="btn btn-warning">Download</a> </th>

                          </tr> 
                        @endforeach
                    </tbody>

                    </tbody>
                  </table>             
            </div>
        </div>
    </div>

	@endsection

</body>

</html>
