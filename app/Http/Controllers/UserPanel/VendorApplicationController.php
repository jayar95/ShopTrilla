<?php
	namespace App\Http\Controllers\UserPanel;

	use App\Http\Controllers\Controller;
	use App\VendorApplication;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Session;

	class VendorApplicationController extends Controller {
		public function send() {
			$vendorApplication = new VendorApplication();
			$vendorApplication->user = Auth::user()->id;
			$vendorApplication->save();

			Session::flash('success', 'Application sent successfully!');

			return view('userPanel.vendorApplication');
		}
	}