<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta http-equiv="X-USA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href='//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
	<title>PHPCMS</title>
        {{ HTML:: style('css/main.css') }}
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                @if(!Auth::check())
                    <li> {{ HTML::link('users/register', 'Register') }}</li>
                    <li> {{ HTML::link('users/login', 'Login') }} </li>
                @else
                    <li> {{ HTML::link('users/logout', 'logout') }} </li>
                    <li> {{ HTML::link('pages', 'Pages') }} </li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="container">
        @if(Session::has('message'))
            <p class='alert'>{{ Session::get('message') }} </p>
        @endif
    </div>
    
    {{ $content }} 
</body>
</html>
