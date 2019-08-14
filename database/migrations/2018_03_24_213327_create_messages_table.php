<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('messages')){
        Schema::create('messages', function (Blueprint $table) {  
            $table->increments('id');
            $table->Text('message');
            $table->integer('sender');
            $table->integer('reciever'); 
            $table->string('subject');
            $table->string('file');
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
