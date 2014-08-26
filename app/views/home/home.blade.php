@extends('layouts.main')
@section('content')
<h1>Welcome!</h1>

<ul class='list-unstyled list-inline'>
    <li>{{ HTML::link('users/register', 'Register',array('class'=>'btn btn-primary')) }}
    </li>
    <li>{{ HTML::link('users/login', 'Login',array('class'=>'btn btn-info')) }}
    </li>
</ul>

@stop