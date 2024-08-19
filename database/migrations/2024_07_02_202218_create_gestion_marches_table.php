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
        Schema::create('gestion_marches', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_marche')->index();
            $table->string('intitule_marche');
            $table->integer('numero_compte_principal')->nullable()->index();
            $table->string('banque_compte_principal')->nullable();
            $table->integer('numero_compte_avenant')->nullable()->index();
            $table->string('banque_compte_avenant')->nullable();
            $table->decimal('montant_marche', 12, 2)->nullable();
            $table->decimal('montant_avenant', 12, 2)->nullable();
            $table->decimal('montant_nantissement', 12, 2)->nullable();
            $table->decimal('montant_ordonnancement', 12, 2)->nullable();
            $table->decimal('reste_ordonnancer_nantissement', 12, 2)->nullable();
            $table->string('avenant_rib')->nullable();
            $table->string('banque')->nullable();
            $table->text('observations')->nullable();
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
        Schema::dropIfExists('gestion_marches');
    }
};
