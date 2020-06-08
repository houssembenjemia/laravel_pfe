<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date_prime');
            $table->string('commision');
            $table->string('prime_tot');
            $table->string('type_paiement');
            $table->string('montant');
            $table->string('referance');
            $table->date('date_cheq')->default(null);
            $table->string('banque');
            $table->string('feuille');
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
        Schema::dropIfExists('primes');
    }
}
