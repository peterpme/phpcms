@extends('layouts.main')

@section('content')

{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Please Login</h2>
 
    <div class="form-group">
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
    </div>
 
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary'))}}
    {{ Form::submit('Forgot Password?', array('class'=>'btn btn-large btn-info')) }}
{{ Form::close() }}

@stop