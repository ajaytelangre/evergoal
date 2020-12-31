<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('payment_amount')->nullable();
            $table->timestamp('payment_date')->nullable();
            $table->string('order_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->float('withdraw_amount')->nullable();
            $table->timestamp('withdraw_date')->nullable();



           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
