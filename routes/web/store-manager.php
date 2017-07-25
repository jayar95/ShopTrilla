<?php
	Route::prefix('vendor')->group(function() {
		Route::get('/', function() {
			return view('store-manager.base');
		})->name('vendor.index');

		Route::get('create-product', function() {
			return view('store-manager.create-product');
		})->name('vendor.create-product.post');

		Route::post('create-product', [
			'uses' => 'Vendor\VendorPanelController@createProduct'
		])->name('vendor.create-product.post');
	});