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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', 'ProductController@index');

Route::get('home', 'HomeController@index')->name('home');
Route::get('home/getdata', 'HomeController@getdata')->name('home.getdata');
Route::get('home/massremove', 'HomeController@massRemove')->name('home.massRemove');
Route::get('home/dataremove', 'HomeController@removeData')->name('home.removeData');
Route::get('home/fetchdata', 'HomeController@fetchData')->name('home.fetchData');
Route::post('home/postdata', 'HomeController@postdata')->name('home.postdata');

Route::post('home/taxinclusion', 'ConfigController@changeTaxInclusion')->name('home.taxInclusion');
Route::get('home/getConfigData', 'ConfigController@getConfigData')->name('home.getConfigData');
Route::post('home/taxRate', 'ConfigController@taxRate')->name('home.taxRate');
Route::post('home/discountTypeChange', 'ConfigController@discountTypeChange')->name('home.discountTypeChange');
Route::post('home/discountRate', 'ConfigController@discountRate')->name('home.discountRate');


Route::get('frontend', 'HomeController@frontend')->name('frontend');
Route::get('frontend/getallitems', 'HomeController@getAllItems')->name('frontend.getAllItems');

Route::get('frontend/griditem', 'HomeController@griditem');











// Auth::routes();

// Authentication Routes...
Route::get('admin', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('admin', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);
  
//   // Password Reset Routes...
//   Route::post('password/email', [
//     'as' => 'password.email',
//     'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
//   ]);
//   Route::get('password/reset', [
//     'as' => 'password.request',
//     'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
//   ]);
//   Route::post('password/reset', [
//     'as' => 'password.update',
//     'uses' => 'Auth\ResetPasswordController@reset'
//   ]);
//   Route::get('password/reset/{token}', [
//     'as' => 'password.reset',
//     'uses' => 'Auth\ResetPasswordController@showResetForm'
//   ]);
  
//   // Registration Routes...
//   Route::get('register', [
//     'as' => 'register',
//     'uses' => 'Auth\RegisterController@showRegistrationForm'
//   ]);
//   Route::post('register', [
//     'as' => '',
//     'uses' => 'Auth\RegisterController@register'
//   ]);

