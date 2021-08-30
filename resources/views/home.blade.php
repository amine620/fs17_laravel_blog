<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
   <div class="container">
       <div class="row"  style="margin-top:100px">
           @foreach ($posts as $post)
               
           <div class="card col-md-4 mt-2">
               <img style="width: 400px;height:200px" src="{{asset('storage/'.$post->photo)}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$post->title}}</h5>
                 <p class="card-text">{{$post->description}}</p>
                 <a href="{{route('list')}}" class="btn btn-primary">go back</a>
               </div>
             </div>
             
           @endforeach

        
       </div>
   </div>


       <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>