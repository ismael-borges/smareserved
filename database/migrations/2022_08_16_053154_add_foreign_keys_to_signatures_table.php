<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signatures', function (Blueprint $table) {
            $table->foreign(['address_id'], 'FKSIGNATUREADDRESS')->references(['id'])->on('address')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['payment_id'], 'FKSIGNATUREPAYMENT')->references(['id'])->on('payment')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['recurrence_id'], 'FKSIGNATURERECURRENCE')->references(['id'])->on('recurrence')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['user_id'], 'FKSIGNATUREUSER')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signatures', function (Blueprint $table) {
            $table->dropForeign('FKSIGNATUREADDRESS');
            $table->dropForeign('FKSIGNATUREPAYMENT');
            $table->dropForeign('FKSIGNATURERECURRENCE');
            $table->dropForeign('FKSIGNATUREUSER');
        });
    }
}
