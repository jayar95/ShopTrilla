<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

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
