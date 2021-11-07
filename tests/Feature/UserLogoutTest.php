<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLogoutTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();

        Auth::login($this->user);
    }

    public function test_user_can_logout()
    {
        $response = $this->getJson(
            route('api.auth.logout')
        );

        $response->assertStatus(200);
    }
}
