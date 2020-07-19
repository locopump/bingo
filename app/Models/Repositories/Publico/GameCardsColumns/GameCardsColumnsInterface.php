<?php

namespace App\Models\Repositories\Publico\GameCardsColumns;


interface GameCardsColumnsInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function register(array $data);

    /**
     * @param int $gamec_id
     * @return mixed
     */
    public function getColumnsByCard(int $gamec_id);
}
