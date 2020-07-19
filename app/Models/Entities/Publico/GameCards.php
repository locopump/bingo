<?php


namespace App\Models\Entities\Publico;


use Illuminate\Database\Eloquent\Model;

class GameCards extends Model
{
    protected $table = 'game_cards';
    public $timestamps = true;

    protected $fillable = [
        'game_id',
    ];
}
