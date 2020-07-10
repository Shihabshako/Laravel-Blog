@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3>Your Blog Posts</h3>
                    @if (count($posts)>0)
                        <table class="table table-striped text-center table-bordered">
                            <tr>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>

                            @foreach ($posts as $post)
                                <tr>
                                     <td>{{$post->title}}</td>
                                     <td class="d-flex justify-content-center">
                                         <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mr-2">Edit</a> 
                                         <form action="/posts/{{$post->id}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger" role="button">Delete</button>
                                        </form>
                                     </td>
                                </tr>
                            @endforeach
                               
                        </table>
                    @else
                        <h3>You Have No Posts</h3>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
