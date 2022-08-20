<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaturesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signatures_products', function (Blueprint $table) {
            $table->unsignedInteger('signature_id');
            $table->unsignedInteger('product_id')->index('FKSIGNATUREPRODUCTSPRODUCTS_idx');
            $table->integer('quantity');
            $table->timestamps();

            $table->primary(['signature_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signatures_products');
    }
}
