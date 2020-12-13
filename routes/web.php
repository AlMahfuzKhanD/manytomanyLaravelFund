<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use App\Role;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function(){

    $user =User::findOrFail(5);

    $role = new Role(['name'=>'subs']);
    $user->roles()->save($role);

});


