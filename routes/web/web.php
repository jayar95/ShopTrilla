<?php
	Route::get('/', function () {
	    return view('welcome');
	});

	Route::get('/home', 'HomeController@index')
		->name('home');

	Route::get('list', function() {
		return view('layouts.browse');
	})->name('store.create.view');