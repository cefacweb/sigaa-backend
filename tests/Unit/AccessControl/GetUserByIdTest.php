<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;
use Domain\Entities\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Infra\AccessControl\Repositories\UserRepository;

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
        $useCase = new GetUserById(new UserRepository);
        $result = $useCase($this->testUser->id);

        self::assertEquals($result->id, $this->testUser->id);
    }
}
