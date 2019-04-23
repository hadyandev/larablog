@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <br><br>
    <div class="card mb-4">
        <div class="card-header">
            {{$post->title}}
        </div>
        <div class="card-body">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            <br><br>
            <p class="card-text">{!!$post->body!!}</p>
        </div>
        <div class="card-footer text-muted">
            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        </div>
    </div>

    {{-- display edit & delete button only to logged user --}}
    @if (!Auth::guest())
    {{-- display edit & delete button only to the author of the posts --}}
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post</a>
            <Form method="POST" action="/posts/{{$post->id}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger float-right">Delete</button>
            </Form>
        @endif
    @endif
@endsection