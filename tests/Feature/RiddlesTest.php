<?php

namespace Tests\Feature;

use App\Models\Riddle;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RiddlesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_view_all_riddles()
    {
        $riddle = Riddle::factory()->create();

        $this->get('/riddles')
            ->assertSee($riddle->title);
    }

    /** @test */
    public function a_user_can_create_riddles()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $this->assertAuthenticated();

        $this->get('/riddles/create')->assertStatus(200);
    }

}
