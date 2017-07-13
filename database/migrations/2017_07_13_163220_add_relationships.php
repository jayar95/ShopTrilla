<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class AddRelationships extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::table('stores', function(Blueprint $table) {
				$table->renameColumn('vendor', 'user_id');

				$table->foreign('user_id')->references('id')->on('users');
			});

			Schema::table('products', function(Blueprint $table) {
				$table->renameColumn('store', 'store_id');

				$table->foreign('store_id')->references('id')->on('stores');
			});

			Schema::table('vendor_applications', function(Blueprint $table) {
				$table->renameColumn('user', 'user_id');

				$table->foreign('user_id')->references('id')->on('users');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			//
		}
	}
