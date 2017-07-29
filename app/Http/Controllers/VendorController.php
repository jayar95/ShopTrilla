<?php
	namespace App\Http\Controllers;

	use App\Product;
	use App\VendorApplication;
	use Illuminate\Support\Facades\Auth;

	class VendorController extends Controller {
		/**
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function sendApplication() {
			$vendorApplication = VendorApplication::create([
				'user' => Auth::user()->id,
			]);

			$vendorApplication->save();

			Session::flash('success', 'Application sent successfully!');

			return view('user-panel.vendorApplication');
		}

		/**
		 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
		 */
		public function productManager() {
			$products = Product::where('store_id', Auth::user()->store->id)->get();

			return view('store-manager.product-manager', compact('products'));
		}
	}