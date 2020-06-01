<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesmodels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name',100)->nullable();


             $table->string('beneficiarybank',100)->nullable();
             $table->string('beneficiarybank_id')->nullable();

              $table->string('importer')->nullable();
              $table->string('importer_id')->nullable();
            $table->string('salescontractno',100)->nullable();
            $table->string('dateofcontractregistration',100)->nullable();

            $table->string('notifyparty',100)->nullable();
            $table->string('notifypartycheck')->nullable();
            $table->string('othernotifyparty',100)->nullable();


            $table->string('shipmentform',100)->nullable();
            $table->string('shipmentdestination',100)->nullable();
             $table->string('nameoftheproduct',100)->nullable();
             $table->string('lastdateofshipment',100)->nullable();
             $table->string('contractvalidupto',100)->nullable();
             
              $table->string('packingofbags',100)->nullable();
             $table->string('partshipment',100)->nullable();
               $table->string('modeoftransport',100)->nullable();
                $table->string('modeofpayment',100)->nullable();
                 $table->string('methodofpayment',100)->nullable();

                  $table->string('currency',100)->nullable();
                    $table->float('advancepayment')->nullable();
                    $table->string('partadvancepayment',100)->nullable();
                     $table->string('transshipment',100)->nullable();
                      $table->string('productofshipment',100)->nullable();

                       $table->float('percentegeofproductofshipment')->nullable();
                         $table->string('iban',100)->nullable();
                          $table->string('expno',100)->nullable();
                             $table->string('lcl',100)->nullable();
                                $table->string('lcno',100)->nullable();
                                    $table->integer('sales_pro_key');
                                           $table->text('productdescription')->nullable();
                                   // $table->string('productcode',100)->nullable();
                                   //    $table->float('quantitypcs');
                                   //     $table->float('ctns');
                                   //      $table->float('price');
                                   //       $table->float('netweight');

                                   //        $table->float('totalnetweightcgs');
                                   //         $table->float('grossweight');
                                   //         $table->float('totalgrossweightcgs');

                               
                      



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
        Schema::dropIfExists('salesmodels');
    }
}
