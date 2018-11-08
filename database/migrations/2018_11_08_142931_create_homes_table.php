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
            $table->string('titre');
            $table->text('textarea');
            $table->text('video');
            $table->text('textarea');
            $table->text('commentaires')->nullable();
            $table->text('textarea');
            $table->string('titre2');
            $table->text('projets');
            $table->string('titre3');
            $table->text('textarea');
            $table->text('textarea');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('texte');
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
