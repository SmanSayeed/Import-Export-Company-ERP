<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name')->nullable();
            $table->string('pro_hscode')->nullable();
      
            $table->string('pro_unit')->nullable();
            $table->float('pro_weight')->nullable();
            $table->string('pro_ctn')->nullable();
            $table->float('pro_price')->nullable();
            
            $table->float('pro_cbm')->nullable();
            $table->float('pro_height')->nullable();
            $table->float('pro_width')->nullable();
            $table->float('pro_length')->nullable();
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
        Schema::dropIfExists('pro_models');
    }
}
