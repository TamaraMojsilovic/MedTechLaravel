<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePregledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregleds', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->foreignId('lekar_id')->constrained('lekars');
            $table->foreignId('pacijent_id')->constrained('pacijents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregleds');
    }
}
