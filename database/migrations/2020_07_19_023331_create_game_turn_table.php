<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTurnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_turn', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('game_id')
                ->unsigned();
            $table->foreign('game_id')
                ->references('id')
                ->on('game')
                ->onDelete('cascade');
            $table->string('gamet_column', 1);
            $table->integer('gamet_value');
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
        Schema::dropIfExists('game_turn');
    }
}
