<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomermodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customermodels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('companyname',100)->nullable();
              $table->string('contactperson',100)->nullable();
                $table->string('branch',100)->nullable();
                  $table->string('address',100)->nullable();
                    $table->string('contactno',100)->nullable();

              $table->string('swift',100)->nullable();
                $table->string('email',100)->nullable();
                  $table->string('contactemail',100)->nullable();
                    $table->string('phone',100)->nullable();
                      $table->string('importerbank',100)->nullable();

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
        Schema::dropIfExists('customermodels');
    }
}
