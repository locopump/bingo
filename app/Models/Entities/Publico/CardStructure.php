<?php

namespace App\Models\Entities\Publico;

use Illuminate\Database\Eloquent\Model;

class CardStructure extends Model
{
    protected $table = 'card_structure';
    public $timestamps = true;

    protected $fillable = [
        'cards_column',
        'cards_lower_bound',
        'cards_upper_bound',
    ];
}
