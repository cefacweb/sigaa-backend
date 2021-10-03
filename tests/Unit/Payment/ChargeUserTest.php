<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;
use Domain\Entities\AccessControl\User;
use Application\UseCases\Payment\ChargeUser;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChargeUserTest extends TestCase
{
    use RefreshDatabase;

    protected $testUser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_user_charge_user(): void
    {
        $useCase = new ChargeUser();
        $useCase($this->user->id, 100.00, 'single');

        $this->assertDatabaseHas('charges', [
            'user_id' => $this->user->id,
            'value' => 100.00,
            'type' => 'single'
        ]);
    }
}
