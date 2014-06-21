<h2>Your Pages</h2>
<ul class='list-unstyled list-inline'>
    <li> {{ HTML::link('pages/create', 'Create Page') }} </li>
    <li> {{ HTML::link('pages/view', 'View Pages') }} </li>
    <li> {{ HTML::link('pages/update', 'Update Page') }} </li>
    <li> {{ HTML::link('pages/delete', 'Remove Page') }} </li>
</ul>

<ul>
    @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
    @endforeach
</ul>