@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="card">  -->
    <h1 class="text-center">Update Post</h1>

    <form action="{{route('posts.update',$post->id)}}" method="post">
        @csrf 
        @method('put')
    <div class="form-group row">
        <label for="title">title</label>
        <input type="text" id="title" class="form-control" name="title" value="{{$post->title}}">
    </div>
    <div class="form-group row">
    <label for="content">Content</label>
        <textarea name="" id="content" cols="30" rows="10" class="form-control"> {{$post->content}}</textarea>
    </div>
    <div class="form-group row">
        <label for="name"></label>
        <input type="text" class="form-control" id="name" name="writer_name" value="{{$post->writer_name}}">
    </div>
       
    <div class="form-group row">
        <input type="submit" class="btn btn-primary" value="Udpate">
    </div>
  
   
    </form>
<!-- </div> -->
</div>


@endsection