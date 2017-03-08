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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'IndexController@index');

Route::group(['prefix' => 'admin'], function() {
    // Authentication Routes...
    $this->get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    $this->post('login', 'Admin\LoginController@login');
    $this->post('logout', 'Admin\LoginController@logout')->name('admin.logout');

    // Registration Routes...
    $this->get('register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    $this->post('register', 'Admin\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    $this->post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    $this->get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    $this->post('password/reset', 'Admin\ResetPasswordController@reset');
});

Route::group(['prefix' => 'user'], function() {
    // Authentication Routes...

    $this->get('login', 'User\LoginController@showLoginForm')->name('user.login');
    $this->post('login', 'User\LoginController@login');
    $this->get('logout', 'User\LoginController@logout')->name('user.logout');

    // Registration Routes...
    $this->get('register', 'User\RegisterController@showRegistrationForm')->name('user.register');
    $this->post('register', 'User\RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    $this->post('password/email', 'User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    $this->get('password/reset/{token}', 'User\ResetPasswordController@showResetForm')->name('user.password.reset');
    $this->post('password/reset', 'User\ResetPasswordController@reset');
});

Route::get('/home', 'HomeController@index');
