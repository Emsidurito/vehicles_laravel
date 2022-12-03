<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesModificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('vehicles_modificacions', function (Blueprint $table) {
     $table->id();
     $table->foreignId('vehicle_id')->constrained()->on('vehicles')->onDelete('cascade');
     $table->foreignId('modificacio_id')->constrained()->on('modificacions')->onDelete('cascade');
     $table->unique(['vehicle_id','modificacio_id']);
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
        Schema::dropIfExists('vehicles_modificacions');
    }
}
