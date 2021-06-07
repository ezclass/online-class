<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddYoutubeToDocuments extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->string('youtube')->nullable()->after('file');
        });
    }

    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('youtube');
        });
    }
}
