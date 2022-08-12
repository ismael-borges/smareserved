<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname', 45)->nullable();
            $table->string('cep', 45)->nullable();
            $table->string('digit', 45)->nullable();
            $table->string('complement', 45)->nullable();
            $table->string('superscription', 45)->nullable();
            $table->string('district', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->string('state', 45)->nullable();
            $table->string('reference', 45)->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index('addressuserid_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
