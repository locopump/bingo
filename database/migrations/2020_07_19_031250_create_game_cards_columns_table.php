<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameCardsColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_cards_columns', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('gamec_id')->unsigned();
            $table->foreign('gamec_id')->references('id')->on('game_cards')
                ->onDelete('cascade');
            $table->string('gamecc_column', 1);
            $table->integer('gamecc_position');
            $table->integer('gamecc_value');
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
        Schema::dropIfExists('game_cards_columns');
    }
}
