<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('examens')){
        Schema::create('examens', function (Blueprint $table) {
            $table->increments('id');
            
             $table->string('titre');
             $table->integer('note');
             $table->integer('categorie_id')->unsigned();
             $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->boolean('publier')->default(0);
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
}
