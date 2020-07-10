@extends('layouts/app')

@section('content')
    <a href="/posts" class="btn btn-secondary my-3" role="button">Go Back</a>
    <h1>{{$post->title}}</h1><br> <br>
    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" class="img-fluid"> 
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written On {{$post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user->id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning float-left" role="button">Edit</a>
            <form action="/posts/{{$post->id}}" method="post" class="text-right">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" role="button">Delete</button>
            </form> 
        @endif
        
    @endif
        
    
@endsection