<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBarangsTable extends Migration
{
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->string('satuan')->change(); 
        });
    }

    public function down()
    {
        Schema::table('barangs', function (Blueprint $table) {
     
        });
    }
}