<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankPaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('bank_payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->string('invoice_date');
            $table->float('amount');
            $table->morphs('payer');
            $table->morphs('subscribable');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bank_payments');
    }
}
