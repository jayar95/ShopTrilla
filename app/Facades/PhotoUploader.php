<?php
	namespace App\Facades;

	use Illuminate\Support\Facades\Facade;

	class PhotoUploader extends Facade {
		protected static function getFacadeAccessor() {
			return 'PhotoUploader';
		}
	}