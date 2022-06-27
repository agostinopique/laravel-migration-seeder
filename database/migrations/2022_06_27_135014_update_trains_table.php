<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('agency', 200);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_number')->unique();
            $table->smallInteger('carriage_number');
            $table->boolean('is_onTime');
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
            $table->dropColumn('agency');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_number');
            $table->dropColumn('carriage_number');
            $table->dropColumn('is_onTime');
        });
    }
}
