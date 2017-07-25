<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	/**
	 * App\ProductPhoto
	 *
	 * @property int $id
	 * @property string $filepath
	 * @property int $product_id
	 * @property \Carbon\Carbon|null $created_at
	 * @property \Carbon\Carbon|null $updated_at
	 * @property-read \App\Product $product
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereCreatedAt($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereFilepath($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereProductId($value)
	 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductPhoto whereUpdatedAt($value)
	 * @mixin \Eloquent
	 */
	class ProductPhoto extends Model {
		protected $fillable = [
			'filepath',
			'product_id',
		];

		public function product() {
			return $this->belongsTo('App\Product');
		}
	}
