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

Route::get('/read', function(){
    $user = User::findORFail(2);
    foreach($user->roles as $role){
        return $role->name;
    }
});

Route::get('/update', function(){
    $user = User::findOrFail(1);

    if($user->has('roles')){
        foreach($user->roles as $role){
            if($role->name = 'admin'){
                $role->name = 'administrator';
                $role->save();
            }
        }
    }

    // $user->roles()->whereId(1)->update(['name'=>'sub']);
});

Route::get('/delete', function(){
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        $role->whereId(1)->delete();
    }
});


