<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanCreateChargeTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    private $payer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payer = User::factory()->create();
        $this->user = User::factory()->create();
        Auth::login($this->user);
    }

    public function test_user_can_create_charge_to_valid_payer()
    {
        $response = $this->postJson(
            route('api.charge.store'),
            [
                "user_id" => $this->payer->id,
                "value" => "100",
                "type" => "single"
            ]
        );

        $response->assertStatus(201);
    }

    public function test_user_cant_create_charge_to_invalid_payer()
    {
        $response = $this->postJson(
            route('api.charge.store'),
            [
                "user_id" => "Invalid Id",
                "value" => "100",
                "type" => "password"
            ]
        );

        $response->assertStatus(422);
    }
}
