<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/testing', function()
{
    dd( Auth::user());
});

Route::post('/rol', function()
{
    $owner = new \App\Role();
    $owner->name         = 'owner';
    $owner->display_name = 'Project Owner';
    $owner->description  = 'User is the owner of a given project'; // optional
    $owner->save();

    $admin = new \App\Role();
    $admin->name         = 'admin';
    $admin->display_name = 'User Administrator'; // optional
    $admin->description  = 'User is allowed to manage and edit other users'; // optional
    $admin->save();
});

Route::post('/user', function()
{
    $user = new \App\User();
    $user->name = 'Juan Camilo';
    $user->email = 'juan55860@gmail.com';
    $user->password = Hash::make('12345');
    return Response::json($user->save());
});

Route::get('/user/list', function()
{
    $user = new \App\User();
    return Response::json($user->all());
});

