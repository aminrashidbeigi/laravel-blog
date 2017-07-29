<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('post_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_id');
            $table->foreign('post_id')->refrences('id')->on('posts');

            $table->string('tag_id');
            $table->foreign('tag_id')->refrences('id')->on('tag');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('post_tag');
    }
}
