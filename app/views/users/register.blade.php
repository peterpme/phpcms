@extends('layouts.main')

@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <h2 class="page-title">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    <div class="form-group">
        {{ Form::label('firstname', 'First Name') }}
        {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Last Name') }}
        {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
    </div>
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary')) }}
{{ Form::close() }}

@stop