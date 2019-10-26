<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('customername');
            $table->String('customeraddress');
            $table->Integer('customernumber');
            $table->String('product_id');
            $table->Integer('quantity');
            $table->Integer('rate');
            $table->Integer('totalamount');
            $table->Integer('vat');
            $table->Integer('finalprice');
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
        Schema::dropIfExists('orders');
    }
}
