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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            // METODO CON FAKER 

            // $table->string('azienda');
            // $table->string('stazione_partenza');
            // $table->string('stazione_arrivo');
            // $table->string('orario_partenza');
            // $table->string('orario_arrivo')->nullable();
            // $table->smallInteger('cod_treno');
            // $table->tinyInteger('n_carrozze');
            // $table->boolean('in_orario');
            // $table->boolean('cancellato');

            // METODO CON FILE CSV
            // cambio le intestazioni di colonna
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 5);
            $table->tinyInteger('wagons_number');
            $table->boolean('on_time');
            $table->boolean('cancelled');

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
        Schema::dropIfExists('trains');
    }
};
