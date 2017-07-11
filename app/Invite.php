<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\Invite
	 *
	 * @mixin \Eloquent
	 */
	class Invite extends Model {
		protected $fillable = [
			'email',
			'sender',
			'token',
		];
	}