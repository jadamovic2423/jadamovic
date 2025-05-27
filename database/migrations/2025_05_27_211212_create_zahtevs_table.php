<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('zahtevs', function (Blueprint $table) {
            $table->id('zahtev_id');
            $table->date('datum_kreiranja');
            $table->string('podnosilac_zahteva');
            $table->integer('status_zahteva');
            $table->string('vrsta');
            $table->integer('prioritet');
            $table->string('naziv');
            $table->text('sadrzaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zahtevs');
    }
};
