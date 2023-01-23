@extends('layouts.app')

@section('content')
@if($posts->isEmpty())
<div class="alert alert-secondary mt-5" role="alert">
 There are no blogs posted here currently...
</div>
@else

@foreach($posts as $post)
<div class="container">
    <h3 class="text-center">All Posts</h3>
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Title</th>
            <th>Writer Name</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->writer_name}}</td>
            <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-warning">View</a></td>
            <form action="{{route('posts.destroy',$post->id)}}" method="post">
                @csrf
                @method('delete')
            <td><button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
            
        </tr>
       
        </tbody>
    </table>
</div>
  
 



@endforeach
@endif
@endsection