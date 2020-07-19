<?php


namespace App\Models\Repositories\Publico\CardStructure;

use App\Models\Entities\Publico\CardStructure;
use App\Models\Repositories\Publico\CardStructure\CardStructureInterface;


class CardStructureRepository implements CardStructureInterface
{
    public function getAll()
    {
        return CardStructure::get();
    }
}
