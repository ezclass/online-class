<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSummaryTypeInPaidsTable extends Migration
{
    public function up()
    {
        Schema::table('paids', function (Blueprint $table) {
            $table->string('summary')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('paids', function (Blueprint $table) {
            $table->json('summary')->nullable()->change();
        });
    }
}
