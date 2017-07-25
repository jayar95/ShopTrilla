<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\Store
	 *
	 * @property int $id
	 * @property string $name
	 * @property int $user_id
	 * @property \Carbon\Carbon|null $created_at
	 * @property \Carbon\Carbon|null $updated_at
	 * @property string|null $deleted_at
	 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
	 * @property-read \App\User $user
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUserId($value)
	 * @mixin \Eloquent
	 */
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
