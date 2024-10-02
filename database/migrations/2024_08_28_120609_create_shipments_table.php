<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('from_company');
            $table->string('to_company');
            $table->string('from_address');
            $table->string('to_address');
            $table->string('vehicle_number');
            $table->string('model_name');
            $table->string('driver_name');
            $table->string('driver_no');
            $table->string('product_name');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
