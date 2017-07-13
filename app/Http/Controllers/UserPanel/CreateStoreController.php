<?php
	namespace App\Http\Controllers\UserPanel;

	use App\Http\Controllers\Controller;
	use App\Store;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class CreateStoreController extends Controller {
		public function process(Request $request) {
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