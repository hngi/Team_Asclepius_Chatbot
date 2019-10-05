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
    return redirect('login');
});
    
Route::match(['get', 'post'], '/botman', 'Chatbot\ChatBotController@handle');
Route::post('user/register', 'User\UserController@register');
Route::post('user/login', 'User\UserController@login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/help','HomeController@help');
Route::get('/contact_us','HomeController@contactus');
Route::get('/email','HomeController@forgotpassword');
Route::get('/logout',function()
{
	Auth::logout();
	return redirect()->to('/home');
});

