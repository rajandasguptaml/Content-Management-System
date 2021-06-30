<!DOCTYPE html>
<html>
    <head>
        <title>Content Show</title>
    </head> 

    <div class="container">
<body>
    <h2>Title:{{$Creatorimages->title}}</h2>
    <h3>Description: {{$Creatorimages->cdescription}}</h3>
    <p>
        <iframe src="{{asset('/storage/'.$Creatorimages->video)}}" width="1000px" height="600px" frameborder="0"></iframe> 
        
    </p>
</body>
    </html>

</div>
