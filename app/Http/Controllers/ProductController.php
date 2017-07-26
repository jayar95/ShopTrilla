<?php
	namespace App\Http\Controllers;

	use App\Product;

	class ProductController extends Controller {
		public function view(Product $product) {
			$photos = $product->photos;

			return view('product.view-product', [
				'product' => $product,
			]);
		}
	}