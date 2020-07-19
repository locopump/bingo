<?php


namespace App\Models\Services\Publico;


use App\Models\Repositories\Publico\GameCardsColumns\GameCardsColumnsInterface;

class GameCardsColumnsService
{
    protected $game_cards_columns_repo;

    public function __construct(GameCardsColumnsInterface $game_cards_columns_repo)
    {
        $this->game_cards_columns_repo = $game_cards_columns_repo;
    }



    public function registerRaw(array $data)
    {
        $response['status'] = 0;
        $response['message'] = '';
        $response['error'] = [];

        try {
            $data = $this->game_cards_columns_repo->register($data);

            if ($data) {
                $response = [
                    'status' => 1,
                    'data' => $data,
                    'message' => 'Game created successfully.',
                ];

            } else {
                $response = [
                    'error' =>
                        [
                            'type' => 'Query',
                            'description' => null
                        ],
                    'message' => 'Error detected!!',
                ];
            }
        } catch (QueryException $e) {
            $response = [
                'error' =>
                    [
                        'type' => 'Query',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
            ];
            Log::critical('Add new Game Card Value',
                ['request' => $response, 'exception' => $e->getMessage()]);
        } catch (Exception $e) {
            $response = [
                'error' =>
                    [
                        'type' => 'Code',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
            ];
            Log::alert('Add new Game Card Value',
                ['request' => $response, 'exception' => $e->getMessage()]);
        }

        return $response;
    }

    public function getAllRaw(int $gamec_id)
    {
        $response['status'] = 0;
        $response['message'] = '';
        $response['records'] = [];

        try {
            $column = $this->game_cards_columns_repo->getColumnsByCard($gamec_id);

            if ( !empty($column) ) {
                $response = [
                    'status' => 1,
                    'data' => $column,
                    'message' => 'Success.',
                ];

            } else {
                $response = [
                    'error' =>
                        [
                            'type' => 'Query',
                            'description' => null
                        ],
                    'message' => 'Error detected!!.',
                ];
            }

        } catch (QueryException $e) {
            $response = [
                'error' =>
                    [
                        'type' => 'Query',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
            ];
            Log::critical('Search Ball',
                ['request' => $response, 'exception' => $e->getMessage()]);
        } catch (Exception $e) {
            $response = [
                'error' =>
                    [
                        'type' => 'Code',
                        'description' => null
                    ],
                'message' => '¡ERROR! contact with support.',
            ];
            Log::alert('Search Ball',
                ['request' => $response, 'exception' => $e->getMessage()]);
        }

        return $response;
    }

}
