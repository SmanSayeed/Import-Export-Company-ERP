<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankmodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bankname', 100)->nullable();
            $table->string('bankaccount', 100)->nullable();
            $table->string('bankbranch', 100)->nullable();
            $table->string('bankswift', 100)->nullable();
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
        Schema::dropIfExists('bankmodels');
    }
}
