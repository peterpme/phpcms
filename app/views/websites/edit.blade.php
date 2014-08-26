@extends('layouts.main')

@section('content')
<h2>Edit: {{ $website->name}} </h2>

{{ HTML::ul($errors->all()) }}

{{ Form::model($website, array('route' => array('websites.update', $website->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('web_address', 'Rich Text Field') }}
		{{ Form::text('web_address', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop