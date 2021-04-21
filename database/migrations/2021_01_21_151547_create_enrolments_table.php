<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolmentsTable extends Migration
{
    public function up()
    {
        Schema::create('enrolments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('program_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('payment_date')->nullable();
            $table->tinyInteger('payment_policy')->nullable()->default(1);
            $table->dateTime('accepted_at')->nullable();
            $table->string('remind')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrolments');
    }
}
