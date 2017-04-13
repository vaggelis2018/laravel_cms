@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Edit Post</h1>

    <div class="row">
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update', $post->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Category:') !!}
                {!! Form::select('category_id',['' => 'Choose Category'] + $categories, null, ['class'=>'form-control'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('file','Photo:') !!}
                {!! Form::file('file',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body','Body:') !!}
                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>4]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Post',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

        {!! Form::close() !!}

    </div>
    <div class="row">
        @include('includes.form_error')
    </div>
@stop