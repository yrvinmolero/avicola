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

Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@validateHome');

Route::get('/getProducts', 'HomeController@getProducts');

Route::get('/login', function() {
    return view('auth.login.login');
});

Route::get('/createPublications', 'PublicationController@newPublication');

Route::get('/getCategories', 'PublicationController@getCategoriesUnitsEggs');

Route::post('/storePublication', 'PublicationController@store');

Route::post('/validateLogin', 'LoginController@validateLogin');

Route::get('/register', function() {
    return view('auth.register.register');
});

Route::post('/validateRegister', 'RegisterController@validateRegister');

Route::post('/registerSuccess', 'RegisterController@validateLogin');

Route::get('/reset', function() {
    return view('auth.reset.reset');
});

Route::get('/details', 'DetailsController@validateDetails');

Route::get('/perfil', 'perfileController@validatePerfil');

Route::post('/saveDataContact', 'PerfileController@saveDate');

Route::get('/avicola', 'avicolaController@validateAvicola');
