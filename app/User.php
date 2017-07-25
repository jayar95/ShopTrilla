<?php
	namespace App;

	use Illuminate\Notifications\Notifiable;
	use Illuminate\Foundation\Auth\User as Authenticatable;

	/**
	 * App\User
	 *
	 * @property int $id
	 * @property string $name
	 * @property string $email
	 * @property string $password
	 * @property string|null $remember_token
	 * @property \Carbon\Carbon|null $created_at
	 * @property \Carbon\Carbon|null $updated_at
	 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
	 * @mixin \Eloquent
	 * @property string $type
	 * @property-read \App\Store $store
	 * @property-read \App\VendorApplication $vendorApplication
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereType($value)
	 */
	class User extends Authenticatable {
		use Notifiable;

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
			'name',
			'email',
			'password',
			'type',
		];

		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden = [
			'password', 'remember_token',
		];

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasOne
		 */
		public function store() {
			return $this->hasOne('App\Store');
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasOne
		 */
		public function vendorApplication() {
			return $this->hasOne('App\VendorApplication');
		}
	}
