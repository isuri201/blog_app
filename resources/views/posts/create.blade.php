@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Add a new post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="title"> Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group row">
            <label for="content"> Content </label>
            <textarea rows="" cols="" class="form-control" name="content"></textarea>
        </div>
        <div class="form-group row">
            <label for="name"> Writer Name</label>
            <input type="text" id="name" name="writer_name" class="form-control">
        </div>
        <div class="form-group row"> 
            <input type="submit" class="btn btn-success" value="Add">
        </div>

    </form>
</div>

@endsection