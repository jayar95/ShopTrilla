<?php
	Route::prefix('user-panel')->group(function() {
		Route::get('/', function() {
			return view('user-panel.index');
		})->name('userpanel.index');

		Route::get('create-store', function() {
			return view('user-panel.createStore');
		})->name('store.create');

		Route::post('create-store', [
			'uses' => 'UserPanel\CreateStoreController@process'
		])->name('store.create');

		Route::get('vendor-application', function() {
			return view('user-panel.vendorApplication');
		})->name('vendor.application');

		Route::get('vendor-application/send', [
			'uses' => 'UserPanel\VendorApplicationController@send',
		])->name('vendor.application.send');
	});