<?php

use App\CharacterClass;
use App\Size;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('brawn_buff')->default(0);
            $table->integer('bulk_buff')->default(0);
            $table->integer('speed_buff')->default(0);
            $table->integer('intellect_buff')->default(0);
            $table->integer('appeal_buff')->default(0);
            $table->unsignedInteger('weapon_limit');
            $table->unsignedInteger('armour_limit');
            $table->boolean('is_religious')->default(true);
            $table->boolean('is_magical')->default(true);
            $table->timestamps();
        });

        $small = Size::where(['title' => 'Light'])->first()->id;
        $medium = Size::where(['title' => 'Medium'])->first()->id;
        $large = Size::where(['title' => 'Heavy'])->first()->id;
        CharacterClass::create(['title' => 'Warrior', 'brawn_buff' => 3, 'bulk_buff' => 2, 'is_magical' => false, 'weapon_limit' => $large, 'armour_limit' => $large]);
        CharacterClass::create(['title' => 'Rogue', 'speed_buff' => 3, 'appeal_buff' => 2, 'is_religious' => false, 'weapon_limit' => $medium, 'armour_limit' => $medium]);
        CharacterClass::create(['title' => 'Wizard', 'intellect_buff' => 5, 'weapon_limit' => $medium, 'armour_limit' => $medium]);
        CharacterClass::create(['title' => 'Priest', 'intellect_buff' => 3, 'appeal_buff' => 2, 'weapon_limit' => $medium, 'armour_limit' => $small]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_classes');
    }
}
