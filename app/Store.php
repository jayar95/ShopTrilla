<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Store extends Model {
		/**
		 * @var array $fillable
		 */
		protected $fillable = [
			'name',
			'user_id',
		];

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\HasMany
		 */
		public function products() {
			return $this->hasMany('App\Product');
		}

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function user() {
			return $this->belongsTo('App\User');
		}
	}
