@extends('layouts.master')

@section('content')
    
   <div class="container">
       <div class="row"  style="margin-top:30px">
           @foreach ($posts as $post)
               
           <div class="card col-md-4 mt-2">
               <img style="width: 400px;height:200px" src="{{asset('storage/'.$post->photo)}}" class="card-img-top" alt="...">
               <div class="card-body">
                 <h3 class="card-title">{{$post->user->name}}</h3>
                 <h5 class="card-title">{{$post->title}}</h5>
                 <p class="card-text">{{$post->description}}</p>
                 <a href="{{route('commentPage',$post->id)}}" class="btn btn-primary">see details</a>
                 <br>
                 <span class="text-secondary">published at : {{ $post->created_at->diffforhumans() }}</span>
               </div>
             </div>
             
           @endforeach

        
       </div>
   </div>

   @endsection
