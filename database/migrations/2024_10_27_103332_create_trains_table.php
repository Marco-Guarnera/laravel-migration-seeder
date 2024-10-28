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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', length: 255)->nullable(false);
            $table->string('stazione_partenza', length: 255)->nullable(false);
            $table->string('stazione_arrivo', length: 255)->nullable(false);
            $table->time('orario_partenza', precision: 0)->nullable(false);
            $table->time('orario_arrivo', precision: 0)->nullable(false);
            $table->char('codice_treno', length: 6)->nullable(false);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
