<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id');
            $table->string('image')->nullable();
            $table->double('fees');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('day');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
