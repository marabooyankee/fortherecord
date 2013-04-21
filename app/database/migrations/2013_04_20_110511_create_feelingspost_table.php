<?php

use Illuminate\Database\Migrations\Migration;

class CreateFeelingspostTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('feelingspost',
                function( Illuminate\Database\Schema\Blueprint $table) {
                    $table->increments('id');
                    
                    $table->integer('feeling_id');
                    $table->integer("post_id");
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('feelingspost');
    }

}
