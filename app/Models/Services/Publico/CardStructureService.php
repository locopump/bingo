<?php


namespace App\Models\Services\Publico;


use App\Models\Repositories\Publico\CardStructure\CardStructureInterface;

class CardStructureService
{
    protected $card_structure_repo;

    public function __construct(CardStructureInterface $card_structure_repo)
    {
        $this->card_structure_repo = $card_structure_repo;
    }

    public function getAll()
    {
        $response['status'] = 0;
        $response['message'] = '';
        $response['records'] = [];
        $code = 400;
        $headers = ['Content-Type' => 'application/json; charset=UTF-8'];

        try {
            $card_structure = $this->card_structure_repo->getAll();

            if ($card_structure) {
                $code = 200;
                $response = [
                    'success' => true,
                    'data' => $card_structure,
                    'message' => 'Success.',
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
            Log::critical('Card Structure',
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
            Log::alert('Card Structure',
                ['request' => $response, 'exception' => $e->getMessage()]);
        }

        return response()->json($response, $code, $headers);
    }

}
