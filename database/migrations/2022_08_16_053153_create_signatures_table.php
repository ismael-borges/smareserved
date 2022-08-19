<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signatures', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('fgstatus');
            $table->unsignedInteger('payment_id')->index('FKSIGNATUREPAYMENT_idx');
            $table->unsignedInteger('address_id')->index('FKSIGNATUREADDRESS_idx');
            $table->unsignedInteger('recurrence_id')->index('FKSIGNATURERECURRENCE_idx');
            $table->unsignedBigInteger('user_id')->index('FKSIGNATUREUSER_idx');
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
        Schema::dropIfExists('signatures');
    }
}
