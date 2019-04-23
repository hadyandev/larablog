@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/posts/create" class="btn btn-primary float-right">Create Post</a>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h3>Your Blog Posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr> 
                            @foreach ($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning ">Edit</a></td>
                                    <td>
                                        <Form method="POST" action="/posts/{{$post->id}}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                                        </Form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
