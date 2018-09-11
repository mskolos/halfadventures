<?php

use App\Deity;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('lawful_ratio');
            $table->decimal('alignment_ratio');
            $table->timestamps();
        });

        Deity::class(['name' => 'Uselle', 'description' => '[oo-SELL] Goddess of the seas and oceans. It is said she is like the waves of the ocean itself - no sympathy for class, race, or wealth; only strength. Lover of Minuet.', 'lawful_ratio' => 0.5, 'alignment_ratio' => 0.5]);
        Deity::class(['name' => 'Ariven', 'description' => '[AIR-i-ven] God of death and illness, a surprisingly cheerful and optimistic fellow.', 'lawful_ratio' => 0.8, 'alignment_ratio' => 0.7]);
        Deity::class(['name' => 'Buldin', 'description' => '[bull-DEN] God of the earth and nature, the youngest and most beautiful of all the gods. Spouse of Qiope.', 'lawful_ratio' => 0.3, 'alignment_ratio' => 0.6]);
        Deity::class(['name' => 'Suile and Minuet', 'description' => '[SOO-ee and min-you-ET] The god and goddess of the sun and moon. Never seen without the other, these gods appear to be older than their peers. Even so, the stories around them seem conflicting and descriptions unclear.', 'lawful_ratio' => 0.1, 'alignment_ratio' => 0.5]);
        Deity::class(['name' => 'Qiope', 'description' => '[KEE-oh-p] Goddess of healing and new life, married to Buldin. Her gaze is said to make people feel younger and cure the deathly ill. With so many seeking her out for their own selfish gain, it seems she has become jaded and bitter.', 'lawful_ratio' => 0.2, 'alignment_ratio' => 0.4]);
        Deity::class(['name' => 'Tein', 'description' => '[TAY-n] Goddess of the skies and stars, mother to Suile and Minuet. Fickle and easily angered, but those few to have met her in a pleasant mood have told of her great power and wisdom.', 'lawful_ratio' => 0, 'alignment_ratio' => 0.7]);
        Deity::class(['name' => 'Gedonn', 'description' => '[ge-DON] God of justice and war, often prayed to before battles and to oversee trials. Cares for humans greatly.', 'lawful_ratio' => 1, 'alignment_ratio' => 0.5]);
        Deity::class(['name' => 'Veunta', 'description' => '[VEE-un-tah] Goddess of insects and evildoers. It is said she was once beautiful and empathetic to the mortal plight, but years of seeing the worst in the world has done its toll.', 'lawful_ratio' => 0.5, 'alignment_ratio' => 0]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deities');
    }
}
