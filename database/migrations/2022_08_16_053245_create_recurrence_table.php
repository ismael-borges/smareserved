<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurrenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurrence', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->timestamp('dtlastexecution');
            $table->tinyInteger('monday')->nullable();
            $table->tinyInteger('tuesday')->nullable();
            $table->tinyInteger('wednesday')->nullable();
            $table->tinyInteger('thursday')->nullable();
            $table->tinyInteger('friday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurrence');
    }
}
