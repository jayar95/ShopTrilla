<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\VendorApplication
	 *
	 * @property int $id
	 * @property int $user_id
	 * @property int $approved
	 * @property \Carbon\Carbon|null $created_at
	 * @property \Carbon\Carbon|null $updated_at
	 * @property-read \App\User $user
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereApproved($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\VendorApplication whereUserId($value)
	 * @mixin \Eloquent
	 */
	class VendorApplication extends Model {
		/**
		 * @var array $fillable
		 */
		protected $fillable = [
			'user_id',
			'approved',
		];

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function user() {
			return $this->belongsTo('App\User');
		}
	}