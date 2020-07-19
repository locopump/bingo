<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CardStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card_structure = [
            [
                'cards_column' => 'B',
                'cards_lower_bound' => 1,
                'cards_upper_bound' => 15,
                'created_at' => Carbon::now(),
            ],
            [
                'cards_column' => 'I',
                'cards_lower_bound' => 16,
                'cards_upper_bound' => 30,
                'created_at' => Carbon::now(),
            ],
            [
                'cards_column' => 'N',
                'cards_lower_bound' => 31,
                'cards_upper_bound' => 45,
                'created_at' => Carbon::now(),
            ],
            [
                'cards_column' => 'G',
                'cards_lower_bound' => 46,
                'cards_upper_bound' => 60,
                'created_at' => Carbon::now(),
            ],
            [
                'cards_column' => 'O',
                'cards_lower_bound' => 61,
                'cards_upper_bound' => 75,
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('card_structure')->insert($card_structure);
    }
}
