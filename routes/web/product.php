<?php
	Route::prefix('product')->group(function() {
		Route::get('{product}', 'ProductController@view');

		Route::post('/', [
			'uses' => 'ProductController@create',
		])->name('product.create');

		Route::get('{product}/delete', [
			'uses' => 'ProductController@delete',
		])->name('product.delete');
	});