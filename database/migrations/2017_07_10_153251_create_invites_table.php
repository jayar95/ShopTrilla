<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreateInvitesTable extends Migration {
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up() {
			Schema::create('invites', function (Blueprint $table) {
				$table->increments('id');
				$table->string('email');
				$table->integer('sender');
				$table->string('token', 16)->unique();
				$table->timestamp('created_at');

				$table->foreign('sender')->references('id')->on('users');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down() {
			Schema::dropIfExists('invites');
		}
	}
