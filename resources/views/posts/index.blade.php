@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    {{-- display create post button --}}
    @if (!Auth::guest())
        <a href="/posts/create" class="btn btn-primary float-right">Create Post</a>
        <br><br>
    @endif
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <p><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found. :(</p>
    @endif
@endsection