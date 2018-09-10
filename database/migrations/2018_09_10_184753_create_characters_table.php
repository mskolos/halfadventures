<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('level')->default(1);
            $table->unsignedInteger('experience')->default(0);
            $table->string('name');
            $table->text('physical_description')->nullable();
            $table->text('back_story')->nullable();
            $table->unsignedInteger('stat_id');
            $table->unsignedInteger('current_hit_points');
            $table->unsignedInteger('max_hit_points');
            $table->boolean('is_magical')->default(false);
            $table->unsignedInteger('current_spell_slots');
            $table->unsignedInteger('max_spell_slots');
            $table->unsignedInteger('repertoire_id'); //pivot with spells and attacks tied to character_id
            $table->unsignedInteger('inventory_id'); //current/max carry weight on this, create pivot with items and equipped boolean
            $table->boolean('is_religious')->default(false);
            $table->string('deity')->nullable(); //create deity table
            $table->unsignedInteger('lawful_ratio')->default(0.5); //0 = true Chaotic, 1 = true Lawful
            $table->unsignedInteger('alignment_ratio')->default(0.5); //0 = true Evil, 1 = true Good
            $table->boolean('is_shifted')->default(false);
            $table->unsignedInteger('shift_id')->nullable();
            $table->unsignedInteger('debuff_id')->nullable();
            $table->boolean('is_npc');
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
        Schema::dropIfExists('characters');
    }
}
