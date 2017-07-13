<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Invite;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class InviteController extends Controller {
		/**
		 * Returning static page for sending out new invites
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index() {
			return view('invite.index');
		}

		/**
		 * @param Request $request
		 */
		public function send(Request $request) {
			$this->validate($request, [
				'email' => 'required|email',
			]);

			$invite = Invite::create([
				'email' => $request->get('email'),
				'sender' => Auth::user(),
				'token',
			]);
		}
	}