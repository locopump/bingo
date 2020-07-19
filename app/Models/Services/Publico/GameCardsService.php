<?php


namespace App\Models\Services\Publico;

use App\Models\Repositories\Publico\GameCards\GameCardsInterface;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\Services\Publico\CardStructureService;
use App\Models\Services\Publico\GameCardsColumnsService;
use Illuminate\Support\Facades\DB;


class GameCardsService
{
    protected $game_cards_repo;
    protected $cards_struct_service;
    protected $cards_columns_service;

    public function __construct(
        GameCardsInterface $game_cards_repo,
        CardStructureService $cards_struct_service,
        GameCardsColumnsService $cards_columns_service
    )
    {
        $this->game_cards_repo = $game_cards_repo;
        $this->cards_struct_service = $cards_struct_service;
        $this->cards_columns_service = $cards_columns_service;
    }

    public function register(array $data)
    {
        $response['status'] = 0;
        $response['message'] = '';
        $response['gamec_id'] = 0;
        $code = 400;
        $headers = ['Content-Type' => 'application/json; charset=UTF-8'];

        try {
            $gamec_id = $this->game_cards_repo->register($data);
            $cards_structure = json_decode(json_encode($this->cards_struct_service->getAllRaw()['data']), true);
            $this->generateBall($cards_structure, $gamec_id);
            $columns = $this->cards_columns_service->getAllRaw($gamec_id);


            if ($columns['data']) {
                $code = 200;
                $response = [
                    'success' => true,
                    'gamec_id' => $gamec_id,
                    'data' => $columns['data'],
                    'message' => 'Game Card created successfully.',
                    'code' => $code
                ];

            } else {
                $code = 202;
                $response = [
                    'success' => false,
                    'error' =>
                        [
                            'type' => 'Query',
                            'description' => null
                        ],
                    'message' => 'Error detected!!',
                    'code' => $code
                ];
            }
        } catch (QueryException $e) {
            $response = [
                'success' => false,
                'error' =>
                    [
                        'type' => 'Query',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
                'code' => $code
            ];
            Log::critical('Add new Game Card',
                ['request' => $response, 'exception' => $e->getMessage()]);
        } catch (Exception $e) {
            $response = [
                'success' => false,
                'error' =>
                    [
                        'type' => 'Code',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
                'code' => $code
            ];
            Log::alert('Add new Game Card',
                ['request' => $response, 'exception' => $e->getMessage()]);
        }

        return response()->json($response, $code, $headers);
    }

    private function generateBall($structure, $gamec_id)
    {
        foreach ($structure as $struct) {
            $data = $this->randomBingoBall(
                $struct['cards_column'],
                $struct['cards_lower_bound'],
                $struct['cards_upper_bound'],
                $gamec_id
            );
            foreach ($data as $ball) {
                $card_columns = $this->cards_columns_service->registerRaw($ball);
            }

        }

        return true;
    }

    private function randomBingoBall(string $letter, int $lower, int $upper, int $gamec_id)
    {
        $numbers = range($lower, $upper);
        shuffle($numbers);
        $balls = array_slice($numbers, 0, 5);
        $ballData = [];
        foreach ($balls as $key => $number) {
            $index = $key + 1;
            $value = $number;
            if ($letter == 'N' && $index == 3) {
                $value = 0;
            }
            $ball = array(
                'gamec_id' => $gamec_id,
                'gamecc_column' => $letter,
                'gamecc_position' => $index,
                'gamecc_value' => $value,
            );
            array_push($ballData, $ball);
        }

        return $ballData;
    }
}
