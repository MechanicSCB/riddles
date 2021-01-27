<?php

namespace Tests\Feature;

use App\Models\Riddle;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowRiddleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_view_all_riddles()
    {
        $riddle = Riddle::factory()->create();

        $this->get('/riddles')
            ->assertSee($riddle->title);
    }
}
