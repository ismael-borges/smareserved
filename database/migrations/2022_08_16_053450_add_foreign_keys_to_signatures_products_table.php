<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSignaturesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signatures_products', function (Blueprint $table) {
            $table->foreign(['product_id'], 'FKSIGNATUREPRODUCTSPRODUCTS')->references(['id'])->on('products')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['signature_id'], 'FKSIGNATUREPRODUCTSSIGNATURE')->references(['id'])->on('signatures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signatures_products', function (Blueprint $table) {
            $table->dropForeign('FKSIGNATUREPRODUCTSPRODUCTS');
            $table->dropForeign('FKSIGNATUREPRODUCTSSIGNATURE');
        });
    }
}
