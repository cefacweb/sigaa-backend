<?php

namespace Tests\Feature;

use Tests\TestCase;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_user_can_login()
    {
        $response = $this->postJson(
            route('api.auth.login'),
            [
                "email" => $this->user->email,
                "password" => "password"
            ]
        );

        $response->assertStatus(200);
    }

    public function test_invalid_user_cant_login()
    {
        $response = $this->postJson(
            route('api.auth.login'),
            [
                "email" => $this->user->email,
                "password" => "invalid-password"
            ]
        );

        $response->assertStatus(401);
    }
}
