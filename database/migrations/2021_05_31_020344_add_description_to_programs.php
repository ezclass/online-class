<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToPrograms extends Migration
{
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->string('description')->nullable()->after('day');
        });
    }

    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
