<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanGetChargesTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    private $payer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payer = User::factory()->hasCharges(3)->create();
        $this->charge = $this->payer->charges->first();

        $this->user = User::factory()->create();

        Auth::login($this->user);
    }

    public function test_user_can_get_charges()
    {
        $response = $this->getJson(
            route('api.charge.index')
        );

        $response->assertStatus(200);
    }

    public function test_user_can_get_single_charge()
    {
        $response = $this->getJson(
            route('api.charge.show', $this->charge->id)
        );

        $response->assertStatus(200);
    }
}
