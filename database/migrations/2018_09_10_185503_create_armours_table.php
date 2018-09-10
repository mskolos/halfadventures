<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->string('title');
            $table->text('description');
            $table->integer('weight');
            $table->integer('base_value');
            $table->unsignedInteger('size_id');
            $table->unsignedInteger('enchantment_id')->nullable();
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
        Schema::dropIfExists('armours');
    }
}
