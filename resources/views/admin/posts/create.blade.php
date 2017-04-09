@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Create Post</h1>

    <div class="row">
        {!! Form::open(['method'=>'Post','action'=>'AdminPostsController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',array(1 => 'PHP',2=>'JavaScript'), null, ['class'=>'form-control'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file','Photo:') !!}
            {!! Form::file('file',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Body:') !!}
            {!! Form::textarea('body',null,['class' => 'form-control','rows' => 3]) !!}
        </div>
        <div class="form-group">

        </div>
        <div class="form-group">

        </div>
        <div class="form-group">
            {!! Form::submit('Create Post',['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    <div class="row">
        @include('includes.form_error')
    </div>

@stop