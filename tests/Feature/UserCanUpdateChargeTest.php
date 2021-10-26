<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Src\Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanUpdateChargeTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->payer = User::factory()->hasCharges(1)->create();
        $this->charge = $this->payer->charges->first();

        $this->user = User::factory()->create();

        Auth::login($this->user);
    }

    public function test_user_can_update_charge()
    {
        $response = $this->putJson(
            route('api.charge.update', $this->charge->id),
            [
                'value' => "999"
            ]
        );

        $response->assertStatus(200);
    }
}
