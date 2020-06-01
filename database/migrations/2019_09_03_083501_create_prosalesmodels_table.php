<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsalesmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosalesmodels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('sales_pro_shippingmark')->nullable();
            $table->string('sales_pro_name')->nullable();
            $table->string('sales_pro_hscode')->nullable();
            
            $table->float('sales_pro_weight')->nullable();
            $table->string('sales_pro_unit')->nullable();
            $table->string('sales_pro_ctn')->nullable();
            $table->float('sales_pro_price')->nullable();
            
            $table->float('sales_pro_cbm')->nullable();
            $table->string('sales_pro_height')->nullable();
            $table->string('sales_pro_width')->nullable();
            $table->string('sales_pro_length')->nullable();

                                        $table->float('sales_total_carton')->nullable();
                                        $table->float('sales_total_net_weight')->nullable();
                                         $table->string('sales_fob_value')->nullable();
                                         $table->string('sales_total_fob_value')->nullable();
                        $table->integer('sales_pro_key');

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
        Schema::dropIfExists('prosalesmodels');
    }
}
