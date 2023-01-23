@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mt-5">
  <div class="card-header">
  <h3>{{$post->title}}</h3> 
  </div>
  <div class="card-body">
    {{$post->content}}
  </div>
  <div class="card-footer">
    Writer: {{$post->writer_name}}
  </div>
</div>
</div>
@endsection