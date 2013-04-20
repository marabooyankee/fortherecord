<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users',
                function($table) {
                    $table->increments('id');
                    $table->string('firstname');
                    $table->string('lastname');
                    $table->text('password');
                    $table->string('gender');
                    $table->integer('age');
                    $table->string('date_of_birth');
                    $table->string('major');
                    $table->string('education_level');
                    $table->string('activity');
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
