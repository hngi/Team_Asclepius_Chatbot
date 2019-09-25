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


Route::get('/login',[

	'as'=>'login',
	'uses'=>'userController@showLogin'

]);
Route::get('/signup',[

	'as'=>'signup',
	'uses'=>'userController@showSignup'

]);

Route::post('/login','userController@postLogin');
Route::post('/signup','userController@postSignup'); 

Route::get('/', function () {
    return view('auth.login');
});
    
Route::match(['get', 'post'], '/botman', 'Chatbot\ChatBotController@handle');
Route::post('user/register', 'User\UserController@register');
Route::post('user/login', 'User\UserController@login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
