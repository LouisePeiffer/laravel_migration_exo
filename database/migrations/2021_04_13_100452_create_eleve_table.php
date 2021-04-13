<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleve', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom',40);
            $table->string('email', 50)->nullable();
            $table->string('adresse', 200);
            $table->date('Date de naissance')->format('d-m-y');
            $table->ipAddress('visiteur');
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
        Schema::dropIfExists('eleve');
    }
}
