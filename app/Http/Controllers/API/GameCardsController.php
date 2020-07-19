<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Services\Publico\GameCardsService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GameCardsController extends Controller
{
    protected $game_cards_service;

    public function __construct(GameCardsService $game_cards_service)
    {
        $this->game_cards_service = $game_cards_service;
    }

    public function createGameCards(Request $request)
    {
        $data = [];
        $game_cards = [];
        if ($request->isMethod('post')) {
            if ($request->get('game_id')) $data['game_id'] = $request->get('game_id');
            $data['created_at'] = Carbon::now();

            $game_cards = $this->game_cards_service->register($data);
        }

        return $game_cards;
    }
}
