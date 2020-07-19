<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Services\Publico\GameService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GameController extends Controller
{
    protected $game_service;

    public function __construct(GameService $game_service)
    {
        $this->game_service = $game_service;
    }

    public function createGame(Request $request)
    {
        $data = [];
        $game = [];
        if ($request->isMethod('post')) {
            if ($request->get('game_name')) $data['game_name'] = $request->get('game_name');
            if ($request->get('game_description')) $data['game_description'] = $request->get('game_description');
            $data['created_at'] = Carbon::now();

            $game = $this->game_service->register($data);
        }

        return $game;
    }

    public function getGame(Request $request)
    {
        return (
        $request->route('id') ?
            $this->game_service->getRow($request->route('id')) :
            $this->game_service->getAll()
        );
    }
}
