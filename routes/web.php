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
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/help','HomeController@help');
Route::get('/contact_us','HomeController@contactus');

/** Forgot password */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');



//Route::get('/email','HomeController@forgotpassword');
Route::get('/logout',function()
{
	Auth::logout();
	return redirect()->to('/home');
});

