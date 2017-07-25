<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\Product
	 *
	 * @property int $id
	 * @property string $name
	 * @property string $store_id
	 * @property float $price
	 * @property string $description
	 * @property int $quantity
	 * @property \Carbon\Carbon|null $created_at
	 * @property \Carbon\Carbon|null $updated_at
	 * @property string|null $deleted_at
	 * @property-read \App\Store $store
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDeletedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDescription($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereQuantity($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStoreId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
	 * @mixin \Eloquent
	 */
	class Product extends Model {
		/**
		 * @var array $fillable
		 */
		protected $fillable = [
			'name',
			'store_id',
			'price',
			'description',
			'quantity',
		];

		/**
		 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
		 */
		public function store() {
			return $this->belongsTo('App\Store');
		}
	}
