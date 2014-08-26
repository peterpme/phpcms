@extends('layouts.main')
@section('content')
<h1>Showing {{ $website->name }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $website->name }}</h2>
    <p>
        <strong>Name:</strong> {{ $website->name }}<br>
        <strong>Web Address:</strong> {{ $website->web_address }}
    </p>
</div>
@stop