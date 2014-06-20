<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
<<<<<<< HEAD
<<<<<<< HEAD
    return View::make('hello');
=======
    return View::make('layout');
});

Route::get('users', function() {
  return View::make('users');
>>>>>>> a0dbe2f39328307d0061d3e0441a8c923c3b68c0
});
Route::get('register', function() 
{
    return View::make('register');
});

Route::post('register_action', function()
{
    $data = Input::except(array('_token'));

    $obj = new RegisterController();
    $obj->store();
});

Route::get('send_mail', function() 
{
    Mail::send('folder.view', $data, function($message) {
        $message->to('s851503@gmail.com', 'John Doe')->subject('Welcome!');
    });
    
    return "mail sent!";
<<<<<<< HEAD
});
=======
    return View::make('layouts/main');
});

Route::controller('users', 'UsersController');
>>>>>>> master
=======
});
>>>>>>> a0dbe2f39328307d0061d3e0441a8c923c3b68c0
