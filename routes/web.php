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

Route::get('/', function () {
    return view('welcome')->with('name', 'Victoria');
});
//
//Route::get('/user', 'UserController@index');

//Route::view('/welcome', 'welcome');


//parametros de ruta opcional
//Route::get('user/{id}/data/{name?}', function ($id, $name='martin') {
//    return 'User '.$id .' Name '.$name;
//});

//parametro de ruta requerido
//restreccion de expresion regulares
//Route::get('user/{name}', function ($name) {
//    return 'User '.$name;
//})->where('name', '[A-Za-z]+');
//
//
Route::get('user/{id}/{name}', function ($id, $name) {
    return 'User '.$id .' Name '.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//Rutas nombradas
Route::get('user/profile', function () {
    return 'hello';
})->name('profile');

Route::get('user/{id}', function ($id) {
    // Only executed if {id} is numeric...
    return $id;
});

Route::resource('photos', 'PhotoController');

Route::get('user/{id}', 'UserController@show');

Route::get('home', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/post/{post}', function () {
    //
})->name('post.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::post('edit/{id}','UsersUpdateController@edit') ;