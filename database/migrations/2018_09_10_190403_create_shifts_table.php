<?php

use App\Shift;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('animal');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Shift::create(['animal' => 'Wolf']);
        Shift::create(['animal' => 'Bear']);
        Shift::create(['animal' => 'Eagle']);
        Shift::create(['animal' => 'Panther']);
        Shift::create(['animal' => 'Crocodile']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shifts');
    }
}
