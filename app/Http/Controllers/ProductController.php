<?php
	namespace App\Http\Controllers;

	use App\Exceptions\PermissionDeniedException;
	use App\Product;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

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

		/**
		 * @param Request $request
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function create(Request $request) {
			$this->validate($request, [
				'name' => 'required',
				'quantity' => 'required',
				'description' => 'required',
				'price' => 'required',
				'photos' => 'required',
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
		 * @param Product $product
		 * @return \Illuminate\Http\RedirectResponse
		 * @throws PermissionDeniedException
		 */
		public function delete(Product $product) {
			$store = $product->store_id;

			if (Auth::user()->store->id === $store)
				$product->delete();
			else
				throw new PermissionDeniedException;

			return back()->with('success', 'Product deleted successfully');
		}
	}