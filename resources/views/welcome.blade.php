@extends('layouts.app')

@section('content')
<h1 class="text-center">Welcome to the blog site</h1>
@if($posts->isEmpty())
<div class="alert alert-secondary mt-5" role="alert">
There are no blogs posted here currently...
</div>
@else
@foreach($posts as $post)
<div class="container">
  
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> {{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    <a href="{{route('posts.show' , $post->id)}}" class="btn btn-info">View more...</a>
  
  </div>
</div>

</div>



@endforeach
@endif
@endsection