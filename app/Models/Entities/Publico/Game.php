<?php

namespace App\Models\Entities\Publico;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'game';
    public $timestamps = true;

    protected $fillable = [
        'game_name',
        'game_description',
    ];
}
