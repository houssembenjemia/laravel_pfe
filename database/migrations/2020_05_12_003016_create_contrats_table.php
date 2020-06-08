<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero');
            $table->string('nom_assureur');
            $table->string('type_auto');
            $table->date('date_debut');
            $table->string('duree');
            $table->date('date_fin');
            $table->string('categorie');
            $table->unsignedBigInteger('id_cli');
            $table->unsignedBigInteger('id_obj');
            $table->unsignedBigInteger('id_pri');
            $table->timestamps();
            $table->foreign('id_cli')->references('id')->on('clients');
            $table->foreign('id_obj')->references('id')->on('objets');
            $table->foreign('id_pri')->references('id')->on('primes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrats');
    }
}
