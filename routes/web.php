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

// Route::get('/insert', function(){

//     $user =User::findOrFail(5);

//     $role = new Role(['name'=>'subs']);
//     $user->roles()->save($role);

// });

// Route::get('/read', function(){
//     $user = User::findORFail(2);
//     foreach($user->roles as $role){
//         return $role->name;
//     }
// });

// Route::get('/update', function(){
//     $user = User::findOrFail(2);

//     if($user->has('roles')){
//         foreach($user->roles as $role){
//             if($role->name = 'subs'){
//                 $role->name = 'administrator';
//                 $role->save();
//             }
//         }
//     }

//     // $user->roles()->whereId(1)->update(['name'=>'sub']);
// });

// Route::get('/delete', function(){
//     $user = User::findOrFail(1);
//     foreach($user->roles as $role){
//         $role->whereId(1)->delete();
//     }
// });

// Route::get('/attach', function(){
//     $user = User::findOrFail(1);
//     $user->roles()->attach(2);
// });


// Route::get('/detach', function(){
//     $user = User::findOrFail(1);
//     $user->roles()->detach(2);
// });

// Route::get('/sync', function(){
//     $user = User::findOrFail(1);
//     $user->roles()->sync([2]);
// });

Route::get('/create', function(){
    $user = User::findOrFail(1);
    $role = new Role(['name'=>'subscriber']);
    $user->roles()->save($role);
});

Route::get('/read', function(){
    $user = User::findOrFail(5);
    foreach($user->roles as $role){
        echo $role->name . "<br>";
    }
});

Route::get('/update', function(){
    $user = User::findOrFail(1);
    if($user->has('roles')){
        foreach($user->roles as $role){
            if($role->name = "adminstrator"){
                $role->name = "subscriber";
                $role->save();
            }
        }
    }
});


