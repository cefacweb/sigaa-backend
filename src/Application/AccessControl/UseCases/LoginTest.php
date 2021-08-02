<?php

namespace Application\AccessControl\UseCases;

use Tests\TestCase;
use Illuminate\Http\Request;
use Domain\AccessControl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    protected $testUser;

    protected function setUp(): void
    {
        parent::setUp();

        $this->testUser = User::factory()->create();
    }

    public function test_user_can_login(): void
    {
        $request = new Request();
        $request->setLaravelSession(app('session')->driver());

        $result = Login::handle(
            $this->testUser->email,
            "password",
            $request
        );

        self::assertTrue($result);
    }

    public function test_wrong_user_cant_login(): void
    {
        $request = new Request();
        $request->setLaravelSession(app('session')->driver());

        $result = Login::handle(
            $this->testUser->email,
            "wrong password",
            $request
        );

        self::assertFalse($result);
    }
}
