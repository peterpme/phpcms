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
        <p>Name :</p>
        <p>{{ Form::text('name') }}</p>
        <p>Email :</p>
        <p>{{ Form::text('email') }}</p>
        <p>Password :</p>
        <p>{{ Form::password('password') }}</p>
        <p>{{ Form::submit('Submit') }}</p>
        {{ Form::close() }}
    </body>
</html>
