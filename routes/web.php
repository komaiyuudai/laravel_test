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

Route::get('/', 'TopController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // Authentication Routes...
    $this->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('admin.logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('admin.register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
    // Authentication Routes...

    $this->get('login', 'LoginController@showLoginForm')->name('user.login');
    $this->post('login', 'LoginController@login');
    $this->get('logout', 'LoginController@logout')->name('user.logout');

    // Registration Routes...
    $this->get('register', 'RegisterController@showRegistrationForm')->name('user.register');
    $this->post('register', 'RegisterController@register');

    // Password Reset Routes...
    $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
    $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
    $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('user.password.reset');
    $this->post('password/reset', 'ResetPasswordController@reset');
});

// 店舗
Route::group(['prefix' => 'store'], function() {
    $this->get('/', 'StoreController@index');
});

// ブランド
Route::group(['prefix' => 'brand'], function() {
    $this->get('/', 'BrandController@index');
    $this->get('/{brand_id}', 'BrandController@detail');
});

// ランキング
Route::group(['prefix' => 'ranking'], function() {
    $this->get('/', 'RankingController@index');
});

// 検索
Route::group(['prefix' => 'search'], function() {
    $this->get('/', 'SearchController@index');
});

// 商品
Route::group(['prefix' => '{store_id}/{brand_id}/{product_id}'], function() {
    $this->get('/', 'ProductController@index');
});
