<?php
	namespace App\Http\Controllers;

	use App\Product;

	class ProductController extends Controller {
		/**
		 * @param Product $product
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function view(Product $product) {
			$photos = $product->photos;

			return view('product.view-product', [
				'product' => $product,
			]);
		}
	}