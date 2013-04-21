<?php

use Illuminate\Database\Migrations\Migration;

class CreateFeelingsPosts extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts',
                function($table) {
                    $table->increments('id');
                  
                    $table->text("text");
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('posts');
    }

}
