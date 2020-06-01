<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('admin_email');
            $table->string('admin_username');
            $table->string('admin_full_name');
            $table->string('admin_address');
            $table->string('admin_mobile');
            $table->string('admin_factory');
            $table->string('admin_bin');
            $table->string('admin_erc');
          
            $table->string('admin_password');

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
        Schema::dropIfExists('admins');
    }
}
