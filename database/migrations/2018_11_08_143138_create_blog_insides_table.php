<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogInsidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_insides', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_article');
            $table->text('article');
            $table->text('auteur')->nullable();
            $table->text('commentaires')->nullable();
            $table->text('temp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_insides');
    }
}
