@extends('layouts.main')
@section('content')

<h1>Password Reset</h1>

{{ Form::open(array('url'=> 'password/reset', 'method'=> 'POST')) }}

<div class='form-group'>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
</div>

<div class='form-group'>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class'=> 'form-control','placeholder'=>'Enter Password')) }}
</div>
<div class='form-group'>
    {{ Form::label('password_confirmation', 'Password Confirmation') }}
    {{ Form::password('password_confirmation', array('class'=> 'form-control','placeholder'=>'Password Confirmation')) }}
</div>

{{ Form::submit('Reset Password', array('class'=> 'btn btn-large btn-primary')) }}
{{ Form::close() }}

@stop