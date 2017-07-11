<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Invite;
	use Illuminate\Http\Request;
	use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
	use Symfony\Component\HttpKernel\Exception\HttpException;

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
			$token = $request->get('token');

			if (!$token)
				throw new BadRequestHttpException('Must include token to proceed');

			$token = Invite::where('token', $token)->first();

			if (!$token)
				throw new HttpException('Invalid token!');

			
		}
	}