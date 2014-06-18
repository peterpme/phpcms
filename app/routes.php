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
    return View::make('hello');
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
});