<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnchantmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enchantments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('debuff_id')->nullable();
            $table->unsignedInteger('stat_check')->nullable(); //what stat roll the enemy must fail in order to be debuffed
            $table->unsignedInteger('effect_id')->nullable();
            $table->boolean('is_magical')->default(false);
            $table->boolean('is_religious')->default(false);
            $table->unsignedInteger('deity_id')->nullable();
            $table->unsignedInteger('rarity_id')->nullable();
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
        Schema::dropIfExists('enchantments');
    }
}
