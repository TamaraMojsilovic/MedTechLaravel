<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnPacijent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->renameColumn('br_telefona', 'broj_telefona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacijents', function (Blueprint $table) {
            $table->renameColumn('broj_telefona', 'br_telefona');
        });
    }
}
