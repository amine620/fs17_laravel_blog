@extends('layouts.master')
@section('content')


<div class="container mt-5">
    <div class="card col-md-8 offset-2 ">
        <img style="width: 400px;height:200px" src="{{asset('storage/'.$post->photo)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
      </div>

      <form action="{{route('storeComment')}}" class="fomr-group col-md-8 offset-2 mt-2" method="POST">
        @csrf
        <input type="text" class="form-control" name="content" placeholder="comment..">
        <input type="hidden" value="{{$post->id}}" name="post_id">
        <button class="btn btn-secondary form-control mt-2">add comment</button>
      </form>


      @foreach ($post->comments as $comment)
          {{-- display all comments  --}}
      <div class="card mt-2">
        <div class="card-body">
          <h2 class="card-title">{{$comment->user->name}}</h2>
          {{$comment->content}}
        </div>
        <span class="text-secondary">{{$comment->created_at->diffforhumans()}}</span>
         {{-- delete button --}}

        @if(Auth::user()->id==$comment->user_id)
            <form class="my-2 ml-2" action="{{route('deleteComment',$comment->id)}}" method='post'>
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">delete</button>
            </form>
        @endif

      </div>

     

      @endforeach

    
      
</div>


@endsection
