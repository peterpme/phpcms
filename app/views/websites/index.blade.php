@extends ('layouts.main')
@section('content')
<h1>All Websites</h1> <a class="btn btn-small btn-primary" href="{{ URL::to('websites/create') }}">New Website</a>
<hr>
<ul>
    @foreach($errors->all() as $error)
    <li> {{ $error }}</li>
    @endforeach
</ul>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($website as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>

                {{ Form::open(array('url' => 'websites/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete ', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
                <a class="btn btn-small btn-success" href="{{ URL::to('websites/' . $value->id) }}">View</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('websites/' . $value->id . '/edit') }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop