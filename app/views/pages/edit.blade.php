@extends('layouts.main')

@section('content')
<h2>Edit: {{ $page->name}} </h2>

{{ HTML::ul($errors->all()) }}

{{ Form::model($page, array('route' => array('pages.update', $page->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('richtext', 'Rich Text Field') }}
		{{ Form::textarea('richtext', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop