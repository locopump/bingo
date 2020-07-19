<?php


namespace App\Models\Repositories\Publico;


use App\Models\Entities\Publico\Game;
use App\Models\Repositories\Publico\Game\GameInterface;

class GameRepository implements GameInterface
{
    public function register(array $data)
    {
        return Game::create($data);
    }

    public function getAll()
    {
        return Game::get();
    }

    public function getRow(int $id)
    {
        return Game::find($id);
    }
}
