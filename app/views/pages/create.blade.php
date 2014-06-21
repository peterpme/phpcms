{{ Form::open(array('url'=> 'pages/create-page', 'class' => 'page-create')) }}
    <h2 class="page-title">Create a Page</h2>
    
    <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    </ul>
    
    {{ Form::text('page-name', null, array('class'=>'form-control', 'placeholder'=>'Page Title')) }}
    {{ Form::textarea('page-richtext', null, array('class'=>'form-control', 'placeholder'=>'richtext field')) }}

    
    {{ Form::submit('Create Page', array('class'=>'btn btn-large btn-primary btn-block')) }}

{{ Form::close() }}