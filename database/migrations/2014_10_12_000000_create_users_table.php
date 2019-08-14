<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        if(!Schema::hasTable('users')){
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('date');
            $table->integer('cin');
            $table->string('sexe');
            $table->string('avatar')->default('default.png');
            $table->string('niveau');
            $table->integer('specialite')->default(0);
            $table->string('tel');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
