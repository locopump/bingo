<?php


namespace App\Models\Repositories\Publico\GameCardsColumns;

use App\Models\Entities\Publico\GameCardsColumns;
use App\Models\Repositories\Publico\GameCardsColumns\GameCardsColumnsInterface;


class GameCardsColumnsRepository implements GameCardsColumnsInterface
{
    public function register(array $data)
    {
        return GameCardsColumns::create($data);
    }

    public function getColumnsByCard(int $gamec_id)
    {
        return GameCardsColumns::where('gamec_id', $gamec_id)->get();
    }

}
