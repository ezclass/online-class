<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifiesTable extends Migration
{
    public function up()
    {
        Schema::create('verifies', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->date('dob');
            $table->string('province');
            $table->string('district');
            $table->string('facebook')->nullable();
            $table->string('school');
            $table->string('nic')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('verifies');
    }
}
