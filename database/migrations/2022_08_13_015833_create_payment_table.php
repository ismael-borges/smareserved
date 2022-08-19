<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('digit', 45);
            $table->string('mounth', 45);
            $table->string('yearcard', 45);
            $table->string('nameprinted', 45);
            $table->string('cvv', 45);
            $table->string('nickname', 45);
            $table->unsignedBigInteger('user_id')->index('fkpaymentusers_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
