<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar', function (Blueprint $table) {
            $table->id();
            //$table->foreign('idProfessore')->references('id')->on('')
            $table->string('NameProfessore');
            $table->string('SurnameProfessore');
            $table->string('Day');
            $table->string('Metodologia');
            $table->string('Aula');
            $table->string('OrarioInizio');
            $table->string('OrarioFine');
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
        Schema::dropIfExists('calendar');
    }
};
