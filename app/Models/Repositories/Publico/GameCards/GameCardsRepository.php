<?php


namespace App\Models\Repositories\Publico\GameCards;


use App\Models\Entities\Publico\GameCards;
use App\Models\Repositories\Publico\GameCards\GameCardsInterface;

class GameCardsRepository implements GameCardsInterface
{
    public function register(array $data)
    {
        return GameCards::create($data)->id;
    }
}
