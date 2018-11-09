<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->text('minilogo')->nullable();
            $table->text('logo')->nullable();
            $table->text('projet1');
            $table->text('projet2');
            $table->text('projet3');
            $table->string('titre2');
            $table->text('textarea');
            $table->text('video');
            $table->text('testimonial');
            $table->text('commentaires')->nullable();
            $table->string('titre3');
            $table->text('services');
            $table->string('titre4');
            $table->text('profil1-avatar')->nullable();
            $table->text('profil2-avatar')->nullable();
            $table->text('profil3-avatar')->nullable();
            $table->text('profil1');
            $table->text('profil2');
            $table->text('profil3');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('areyouready');
            $table->string('temp')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
