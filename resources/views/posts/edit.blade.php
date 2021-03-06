@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="/posts/{{$post->id}}", enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea id="article-ckeditor" name="body" cols="30" rows="10" class="form-control" placeholder="Body text">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload Image</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cover_image" name="cover_image">
                    <label class="custom-file-label" for="cover_image">Choose file</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection