<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('grade');
            $table->string('image');
            $table->timestamps();

            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('medium_id')->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
