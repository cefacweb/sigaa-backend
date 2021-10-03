<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanGetChargesTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payer = User::factory()->hasCharges(3)->create();
        $this->user = User::factory()->create();

        $this->charge = $this->payer->charges->first();

        Auth::login($this->user);
    }

    public function test_user_can_get_charges()
    {
        $response = $this->getJson(
            route('api.charges.index')
        );

        $response->assertStatus(200);
    }

    public function test_user_can_get_single_charge()
    {
        $response = $this->getJson(
            route('api.charges.show', $this->charge->id)
        );

        $response->assertStatus(200);
    }
}
