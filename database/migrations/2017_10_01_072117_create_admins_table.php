<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('salt');
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->boolean('tfa_enabled')->default(false);
            $table->string('tfa_key')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->ipAddress('last_ip')->nullable();
            $table->boolean('superadmin')->default(false);
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
        Schema::dropIfExists('admins');
    }
}
