<?php

use Illuminate\Database\Migrations\Migration;

class CreateFeelingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('feelings',
                function($table) {
                    $table->increments('id');

                    $table->string('feeling');
                    $table->string('colour');
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('feelings');
    }

}
