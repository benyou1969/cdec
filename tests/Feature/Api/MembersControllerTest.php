<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class MembersControllerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function display_all_members()
    {
        $member = factory('App\Member')->create();
        $response = $this->json('GET', 'api/members');

        $response->assertStatus(200)
            ->assertSee($member->name);
    }
}
