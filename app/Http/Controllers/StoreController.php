<?php
	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class StoreController extends Controller {
		/**
		 * @param Request $request
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function create(Request $request) {
			$this->validate($request, [
				'name' => 'required',
			]);

			$store = Store::create([
				'name' => $request->get('name'),
				'vendor' => Auth::user()->id,
			]);

			$store->save();

			return redirect()->route('userpanel.index')
				->with('success', 'Store created successfully');
		}
	}