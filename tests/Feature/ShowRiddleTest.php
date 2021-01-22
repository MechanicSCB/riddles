<?php

namespace Tests\Feature;

use App\Models\Riddle;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ShowRiddleTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_riddles()
    {
        $riddle = Riddle::factory()->make();

        $this->get('/riddles')
            ->assertSee($riddle->title);
    }
}
