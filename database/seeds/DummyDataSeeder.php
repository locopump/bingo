<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $game = [
            [
                'game_name' => 'Bingo New Year',
                'game_description' => 'Bingo made for parents of this school',
                'created_at' => Carbon::now(),
            ],
        ];
        $game_cards = [
            [
                'game_id' => 1,
                'created_at' => Carbon::now(),
            ],
        ];
        $game_cards_columns = [
            [
                'gamec_id' => 1,
                'gamecc_column' => 'B',
                'gamecc_position' => 1,
                'gamecc_value' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'B',
                'gamecc_position' => 2,
                'gamecc_value' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'B',
                'gamecc_position' => 3,
                'gamecc_value' => 10,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'B',
                'gamecc_position' => 4,
                'gamecc_value' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'B',
                'gamecc_position' => 5,
                'gamecc_value' => 8,
                'created_at' => Carbon::now(),
            ],

            [
                'gamec_id' => 1,
                'gamecc_column' => 'I',
                'gamecc_position' => 1,
                'gamecc_value' => 21,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'I',
                'gamecc_position' => 2,
                'gamecc_value' => 29,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'I',
                'gamecc_position' => 3,
                'gamecc_value' => 17,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'I',
                'gamecc_position' => 4,
                'gamecc_value' => 20,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'I',
                'gamecc_position' => 5,
                'gamecc_value' => 18,
                'created_at' => Carbon::now(),
            ],

            [
                'gamec_id' => 1,
                'gamecc_column' => 'N',
                'gamecc_position' => 1,
                'gamecc_value' => 31,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'N',
                'gamecc_position' => 2,
                'gamecc_value' => 32,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'N',
                'gamecc_position' => 3,
                'gamecc_value' => 0,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'N',
                'gamecc_position' => 4,
                'gamecc_value' => 45,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'N',
                'gamecc_position' => 5,
                'gamecc_value' => 40,
                'created_at' => Carbon::now(),
            ],

            [
                'gamec_id' => 1,
                'gamecc_column' => 'G',
                'gamecc_position' => 1,
                'gamecc_value' => 47,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'G',
                'gamecc_position' => 2,
                'gamecc_value' => 59,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'G',
                'gamecc_position' => 3,
                'gamecc_value' => 60,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'G',
                'gamecc_position' => 4,
                'gamecc_value' => 48,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'G',
                'gamecc_position' => 5,
                'gamecc_value' => 51,
                'created_at' => Carbon::now(),
            ],

            [
                'gamec_id' => 1,
                'gamecc_column' => 'O',
                'gamecc_position' => 1,
                'gamecc_value' => 69,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'O',
                'gamecc_position' => 2,
                'gamecc_value' => 72,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'O',
                'gamecc_position' => 3,
                'gamecc_value' => 68,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'O',
                'gamecc_position' => 4,
                'gamecc_value' => 65,
                'created_at' => Carbon::now(),
            ],
            [
                'gamec_id' => 1,
                'gamecc_column' => 'O',
                'gamecc_position' => 5,
                'gamecc_value' => 74,
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('game')->insert($game);
        DB::table('game_cards')->insert($game_cards);
        DB::table('game_cards_columns')->insert($game_cards_columns);
    }
}
