@extends ('layouts.main')

@section('content')
{{ Form::open(array('url'=> 'pages')) }}
<h2 class="page-title">Create a Page</h2>

{{ HTML::ul($errors->all()) }}

<div class='form-group'>
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Page Title')) }}
</div>
<div class='form-group'>
    {{ Form::label('richtext', 'Rich Text Editor:') }}
    {{ Form::textarea('richtext', null, array('class'=>'form-control', 'placeholder'=>'richtext field')) }}
</div>

{{ Form::submit('Create Page', array('class'=>'btn btn-large btn-primary btn-block')) }}

{{ Form::close() }}
@stop