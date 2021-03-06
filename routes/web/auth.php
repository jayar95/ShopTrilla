<?php
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

	Route::get('register', [
		'as' => 'register',
		'uses' => 'Auth\RegisterController@showRegistrationForm'
	]);

	Route::post('register', [
		'as' => '',
		'uses' => 'Auth\RegisterController@register'
	]);