@extends('layouts/app')

@section('content')
    <h1>Update Posts</h1>
    <div class="container">
        <form action="/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" class="form-control" type="text" name="title" value="{{$post->title}}" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="editor1"  class="form-control" id="body" cols="30" rows="10" required>{{$post->body}}</textarea>
            </div>
            <div class="form-group">
                <input type="file" name="cover_image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <input type="hidden" name="_method" value="PUT">
        </form>
    </div>
    
@endsection