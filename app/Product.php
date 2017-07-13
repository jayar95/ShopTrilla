<?php
	namespace App;

	use Illuminate\Database\Eloquent\Model;

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
		public function store(){
			return $this->belongsTo('App\Store');
		}
	}
