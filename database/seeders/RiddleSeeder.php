<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RiddleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Riddle::factory()
//            ->count(20)
//            ->create();
        clearDbTable('riddles');
        $input = [
            [2672, 5678],
            [10927782, 6902514],
            [28, 51],
        ];
        $output = [
            334,
            846,
            12,
        ];

        $riddles[] = [
            'title' => 'Greates Common Divisor',
            'body' => 'Find greatest common divisor for two numbers',
            'input' => json_encode($input),
            'output' => json_encode($output),
        ];


        insertChunkedArrayToDb($riddles, 'riddles');
    }
}
