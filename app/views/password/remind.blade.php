@extends('layouts.main')
@section('content')
<h1>Password Reminder</h1>

{{ Form::open(array('url'=> 'password/remind', 'method'=> 'POST')) }}

    <div class='form-group'>
        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
    </div>

    {{ Form::submit('Send Reminder', array('class'=> 'btn btn-large btn-primary')) }}
{{ Form::close() }}

@stop