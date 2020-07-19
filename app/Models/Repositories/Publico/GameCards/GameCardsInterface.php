<?php

namespace App\Models\Repositories\Publico\GameCards;


interface GameCardsInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function register(array $data);
}
