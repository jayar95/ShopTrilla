<?php
	namespace App\Http\Controllers;

	use App\Facades\PhotoUploader;
	use App\Product;
	use App\ProductPhoto;
	use App\VendorApplication;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class VendorController extends Controller {
		/**
		 * @param Request $request
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function createProduct(Request $request) {
			$this->validate($request, [
				'name' => 'required',
				'quantity' => 'required',
				'description' => 'required',
				'price' => 'required',
			]);

			$product = Product::create([
				'name' => $request->get('name'),
				'price' => $request->get('price'),
				'description' => $request->get('description'),
				'quantity' => $request->get('quantity'),
				'store_id' => Auth::user()->store->id,
			]);

			$product->save();

			PhotoUploader::process($request->file('photos'), new ProductPhoto, [
				'product_id' => $product->id,
			]);

			return redirect()->route('vendor.index')
				->with('success', 'Product created successfully');
		}

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
	}