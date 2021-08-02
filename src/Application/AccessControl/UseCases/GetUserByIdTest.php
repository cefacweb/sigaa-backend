<?php

namespace Application\AccessControl\UseCases;

use Tests\TestCase;
use Domain\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetUserByIdTest extends TestCase
{
    use RefreshDatabase;

    protected $testUser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->testUser = User::factory()->create();
    }

    public function test_can_get_user_by_id(): void
    {
        $result = GetUserById::handle($this->testUser->id);

        self::assertEquals($result->getAttributes(), $this->testUser->getAttributes());
    }
}
