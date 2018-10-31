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
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/consulta', 'DoctorController@consulta')->name('consulta');
Route::get('/diagnostico', 'DoctorController@diagnostico')->name('diagnostico');
Route::get('/importar', 'ExcelController@importar')->name('importar');








//Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');/*password.email*/
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email'); /*password.email*/
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset'); /*password.reset*/
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
