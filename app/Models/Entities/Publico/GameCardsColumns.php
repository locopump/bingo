<?php

namespace App\Models\Entities\Publico;

use Illuminate\Database\Eloquent\Model;

class GameCardsColumns extends Model
{
    protected $table = 'game_cards_columns';
    public $timestamps = true;

    protected $fillable = [
        'gamec_id',
        'gamecc_column',
        'gamecc_position',
        'gamecc_value',
    ];
}
