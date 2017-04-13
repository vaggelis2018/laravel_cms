@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Post</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Author</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo_id ? $post->photo->file : 'http://placeholt.it/400x400'}}" alt="" ></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
                    <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->title}}</a></td>
                    <td>{{str_limit($post->body,7)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@stop