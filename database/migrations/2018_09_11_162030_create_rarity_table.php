<?php

use App\Rarity;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRarityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rarity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('drop_rate');
            $table->timestamps();
        });

        Rarity::create(['title' => 'Common', 'drop_rate' => 0.55]);
        Rarity::create(['title' => 'Uncommon', 'drop_rate' => 0.35]);
        Rarity::create(['title' => 'Rare', 'drop_rate' => 0.15]);
        Rarity::create(['title' => 'Epic', 'drop_rate' => 0.05]);
        Rarity::create(['title' => 'Legendary', 'drop_rate' => 0]); //Only dropped on quest completion
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rarity');
    }
}
