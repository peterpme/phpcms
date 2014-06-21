<h2>Your Pages</h2>
<ul>
    @foreach($errors->all() as $error)
    <li> {{ $error }}</li>
    @endforeach
</ul>
<ul class='list-unstyled list-inline'>
    <li> {{ HTML::link('pages/create', 'Create Page') }} </li>
    <li> {{ HTML::link('pages', 'All Pages') }} </li>
    <li> {{ HTML::link('pages/update', 'Update Page') }} </li>
    <li> {{ HTML::link('pages/delete', 'Remove Page') }} </li>
</ul>
<hr>
<h1>All Pages</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->richtext }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the page (uses the destroy method DESTROY /pages/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the page (uses the show method found at GET /pages/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('pages/' . $value->id) }}">Show this Page</a>

                <!-- edit this page (uses the edit method found at GET /pages/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('pages/' . $value->id . '/edit') }}">Edit this Page</a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
