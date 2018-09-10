<?php

use App\Debuff;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Debuff::create(['title' => 'Burning']);
        Debuff::create(['title' => 'Frozen']);
        Debuff::create(['title' => 'Paralyzed']);
        Debuff::create(['title' => 'Poisoned']);
        Debuff::create(['title' => 'Laughing']);
        Debuff::create(['title' => 'Sleeping']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debuffs');
    }
}
