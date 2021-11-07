<?php

namespace Application\UseCases\AccessControl;

use Tests\TestCase;
use Illuminate\Http\Request;
use Src\Application\UseCases\AccessControl\Logout;

class LogoutTest extends TestCase
{
    public function test_user_can_logout(): void
    {
        $request = new Request();
        $request->setLaravelSession(app('session')->driver());
        $oldSessionId = $request->session()->getId();

        $useCase = new Logout();
        $useCase($request);

        self::assertNotEquals($oldSessionId, $request->session()->getId());
    }
}
