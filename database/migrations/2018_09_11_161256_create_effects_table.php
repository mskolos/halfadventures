<?php

use App\Effect;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEffectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->unsignedInteger('rarity_id')->nullable();
            $table->timestamps();
        });

        Effect::create(['title' => 'Light', 'description' => 'Emits light making dark areas lit in a 30ft radius. Effect is dispelled by the Dark effect.']);
        Effect::create(['title' => 'Dark', 'description' => 'Absorbs light making light areas dark in a 30ft radius. Effect is dispelled by the Light effect.']);
        Effect::create(['title' => 'Ethereal', 'description' => 'Can summon a mute, ghostly form that expires after combat or upon being killed. The being is always last in turn order.']);
        Effect::create(['title' => 'Damned', 'description' => 'A demonic presence is felt by the wielder, overseeing their every move. A sense of impending doom and hellish anger overwhelms them.']);
        Effect::create(['title' => 'Angelic', 'description' => 'As if a well-meaning puppeteer lays within, the wielder feels unnaturally compelled to help others or face holy wrath.']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('effects');
    }
}
