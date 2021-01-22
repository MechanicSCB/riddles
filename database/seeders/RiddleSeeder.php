<?php

namespace Database\Seeders;

use App\Models\Riddle;
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
        Riddle::factory()
            ->count(20)
            ->create();
    }
}
