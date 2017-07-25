<?php

	namespace App\Providers;

	use App;
	use App\Util\PhotoUploader;
	use Illuminate\Support\ServiceProvider;

	class PhotoUploaderServiceProvider extends ServiceProvider {
		/**
		 * Bootstrap the application services.
		 *
		 * @return void
		 */
		public function boot() {
			//
		}

		/**
		 * Register the application services.
		 *
		 * @return void
		 */
		public function register() {
			App::bind('PhotoUploader', function () {
				return new PhotoUploader;
			});
		}
	}
