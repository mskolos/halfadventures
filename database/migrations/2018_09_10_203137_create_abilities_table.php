<?php

use App\Ability;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('attack_type_id');
            $table->string('title');
            $table->text('description');
            $table->integer('max_damage'); //max_damage is multiplied by level to scale up over time.
            $table->unsignedInteger('debuff_id')->nullable();
            $table->boolean('is_spell')->default(false);
            $table->timestamps();
        });

        Ability::create(['attack_type_id' => 1, 'title' => 'Hit', 'description' => 'A single unarmed blow.', 'max_damage' => '4', ]);
        Ability::create(['attack_type_id' => 1, 'title' => 'Stab', 'description' => 'A strike with a piercing weapon.', 'max_damage' => '8']);
        Ability::create(['attack_type_id' => 1, 'title' => 'Bludgeon', 'description' => 'A single hit with a blunt weapon.', 'max_damage' => '6', ]);
        Ability::create(['attack_type_id' => 2, 'title' => 'Firebolt', 'description' => 'A ball of flame, catapulted through the air.', 'max_damage' => '8', 'debuff_id' => 1, 'is_spell' => true]);
        Ability::create(['attack_type_id' => 2, 'title' => 'Iceshard', 'description' => 'A dagger of ice, catapulted through the air.', 'max_damage' => '8', 'debuff_id' => 2, 'is_spell' => true]);
        Ability::create(['attack_type_id' => 2, 'title' => 'Glow', 'description' => 'A small ball of light, dispelling darkness in a 30ft radius.', 'max_damage' => '0']);
        Ability::create(['attack_type_id' => 2, 'title' => 'Hypnosis', 'description' => 'An aura of calm drowsiness falls on the target, putting them to sleep.', 'max_damage' => '0', 'debuff_id' => 6, 'is_spell' => true]); //the target will not attack but will wake on being attacked. When asleep, attacks on him have advantage.
        Ability::create(['attack_type_id' => 2, 'title' => 'Charm', 'description' => 'The target sees the caster as an ally and will not attack unless provoked.', 'max_damage' => '0', 'debuff_id' => 7, 'is_spell' => true]); //target will not attack unless attacked, though will not harm his own allies.
        Ability::create(['attack_type_id' => 2, 'title' => 'Giggle', 'description' => 'The target cannot stop laughing.', 'max_damage' => '0', 'debuff_id' => 5, 'is_spell' => true]); //the target has disadvantage on his attacks and advantage to attacks on him.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
