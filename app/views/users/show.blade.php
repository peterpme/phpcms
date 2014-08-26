@extends('layouts.main')
@section('content')

<h1>Your Account Info</h1>

{{ HTML::ul($errors->all()) }}

<div class="row">

    <div class="col-sm-3">
        <ul class="list-unstyled">
            <li><a href="#">Contact Info</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Update Credit Card</a></li>
            <li><a href="#">Delete Account</a></li>
        </ul>
    </div>


    <div class="col-sm-9">
    {{ Form::model($user, array('method' => 'PUT')) }}

        <div class='form-group'>
            {{ Form::label('firstName', 'First Name')}}
            {{ Form::text('firstName', $user->firstname, array('class' => 'form-control'))}}
        </div>
        <div class='form-group'>
            {{ Form::label('lastName', 'Last Name')}}
            {{ Form::text('lastName', $user->lastname, array('class' => 'form-control'))}}
        </div>
        <div class='form-group'>
            {{ Form::label('email', 'Email Address')}}
            {{ Form::text('email', $user->email, array('class' => 'form-control'))}}
        </div>

        {{ Form::submit('Update Info', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
    </div>
</div>

@stop