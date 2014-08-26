<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-USA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>PHPCMS</title>
        {{ HTML:: style('css/bootstrap.min.css') }}
        {{ HTML:: style('css/main.css') }}
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="/"><strong>PHP</strong>CMS</a>

                <ul class="nav navbar-nav pull-right">
                    @if(!Auth::check())
                    <li> {{ HTML::link('users/register', 'Register') }}</li>
                    <li> {{ HTML::link('users/login', 'Login') }} </li>
                    @else
                    <li> {{ HTML::link('userpreferences/show', 'Your Account') }} </li>
                    <li> {{ HTML::link('websites', 'Websites') }} </li>
                    <li> {{ HTML::link('users/logout', 'Logout') }} </li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="container">
            @if(Session::has('message'))
            <p class='alert alert-info'>{{ Session::get('message') }} </p>
            @endif

            @yield('content')
        </div>

    </body>
</html>
