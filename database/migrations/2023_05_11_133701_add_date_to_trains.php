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
        Schema::table('trains', function (Blueprint $table) {
            // $table->date('data_partenza')->after('stazione_arrivo');
            // $table->date('data_arrivo')->after('data_partenza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            // $table->dropColumn('data_partenza');
            // $table->dropColumn('data_arrivo');
        });
    }
};
