<?php

use App\Race;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('brawn_base');
            $table->unsignedInteger('bulk_base');
            $table->unsignedInteger('speed_base');
            $table->unsignedInteger('intellect_base');
            $table->unsignedInteger('appeal_base');
            $table->timestamps();
        });

        Race::create(['title' => 'Human', 'brawn_base' => 5, 'bulk_base' => 10, 'speed_base' => 10, 'intellect_base' => 5, 'appeal_base' => 10]);
        Race::create(['title' => 'Elf', 'brawn_base' => 5, 'bulk_base' => 5, 'speed_base' => 10, 'intellect_base' => 10, 'appeal_base' => 10]);
        Race::create(['title' => 'Dwarf', 'brawn_base' => 5, 'bulk_base' => 10, 'speed_base' => 10, 'intellect_base' => 10, 'appeal_base' => 5]);
        Race::create(['title' => 'Orc', 'brawn_base' => 15, 'bulk_base' => 15, 'speed_base' => 5, 'intellect_base' => 5, 'appeal_base' => 5]);
        Race::create(['title' => 'Shifter', 'brawn_base' => 10, 'bulk_base' => 5, 'speed_base' => 10, 'intellect_base' => 10, 'appeal_base' => 5]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
