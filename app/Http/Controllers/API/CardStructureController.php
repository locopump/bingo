<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Services\Publico\CardStructureService;
use Illuminate\Http\Request;


class CardStructureController extends Controller
{
    protected $card_structure_service;

    public function __construct(CardStructureService $card_structure_service)
    {
        $this->card_structure_service = $card_structure_service;
    }

    public function getStructure(Request $request)
    {
        return $this->card_structure_service->getAll();
    }
}
