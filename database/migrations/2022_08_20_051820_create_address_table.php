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
            $table->string('nickname', 45);
            $table->string('cep', 45);
            $table->string('digit', 45);
            $table->string('complement', 45);
            $table->string('superscription', 45);
            $table->string('district', 45);
            $table->string('city', 45);
            $table->string('state', 45);
            $table->string('reference', 45);
            $table->unsignedBigInteger('user_id')->index('addressuserid_idx');
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
        Schema::dropIfExists('address');
    }
}
