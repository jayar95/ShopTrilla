<?php
	Route::prefix('store-manager')->group(function() {
		Route::get('/', function() {
			return view('store-manager.base');
		})->name('store-manager.index');

		Route::get('create-product', function() {
			return view('store-manager.create-product');
		})->name('store-manager.create-product');

		Route::get('products', [
			'uses' => 'VendorController@productManager',
		]);
	});