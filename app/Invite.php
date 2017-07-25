<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\Invite
	 *
	 * @mixin \Eloquent
	 * @property int $id
	 * @property string $email
	 * @property int $sender
	 * @property string $token
	 * @property \Carbon\Carbon $created_at
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereEmail($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereSender($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invite whereToken($value)
	 */
	class Invite extends Model {
		protected $fillable = [
			'email',
			'sender',
			'token',
		];
	}