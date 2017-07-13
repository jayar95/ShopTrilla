<?php

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('login', [
	'as' => 'login',
	'uses' => 'Auth\LoginController@showLoginForm'
]);

Route::post('login', [
	'as' => '',
	'uses' => 'Auth\LoginController@login'
]);

Route::post('logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
	'as' => 'password.email',
	'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);

Route::get('password/reset', [
	'as' => 'password.request',
	'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);

Route::post('password/reset', [
	'as' => '',
	'uses' => 'Auth\ResetPasswordController@reset'
]);

Route::get('password/reset/{token}', [
	'as' => 'password.reset',
	'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
	'as' => 'register',
	'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
	
Route::post('register', [
	'as' => '',
	'uses' => 'Auth\RegisterController@register'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/invite', 'InviteController@index')->name('invite.index');

Route::prefix('user-panel')->group(function() {
	Route::get('/', function() {
		return view('userPanel.index');
	})->name('userpanel.index');

	Route::get('create-store', function() {
		return view('userPanel.createStore');
	})->name('store.create.view');

	Route::post('create-store', [
		'uses' => 'UserPanel\CreateStoreController@process'
	])->name('store.create');

	Route::get('vendor-application', function() {
		return view('userPanel.vendorApplication');
	})->name('vendor.application');

	Route::get('vendor-application/send', [
		'uses' => 'UserPanel\VendorApplicationController@send',
	])->name('vendor.application.send');
});