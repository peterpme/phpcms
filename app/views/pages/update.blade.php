<h2>Your Pages</h2>

<ul>
    @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
    @endforeach
</ul>