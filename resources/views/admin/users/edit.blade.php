@extends('layouts.admin')

@section('content')

    <h1 class="page-header">Create Users</h1>

    <div class="row">
        <div class="col-sm-3">

            <img src="{{$user->photo?$user->photo->file : "http://placehold.it/400x400" }}" alt="{{$user->photo?$user->photo->name : "No user photo" }}" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',[''=>'Choose Option'] + $roles , null , ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('file','Photo:') !!}
                {!! Form::file('file',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update User',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'Delete','action'=>['AdminUsersController@destroy',$user->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete user',['class'=>'btn btn-danger col-sm-6']) !!}
                </div>

            {!! Form::close() !!}

        </div>
    </div>

    <div class="row">
        @include('includes.form_error')
    </div>


@stop