<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
    </head>
    <body>
        {{ Form::open(array('url' => 'register_action')) }}
            <label>Name :</label>
            {{ Form::text('name') }}<br>
            <label>Email :</label>
            {{ Form::text('email') }}<br>
            <label>Password :</label>
            {{ Form::password('password') }}<br>
            <label>Confirm password: </label>
            {{ Form::password('cpassword') }}<br>
            {{ Form::submit('Submit') }}
        {{ Form::close() }}
    </body>
</html>
