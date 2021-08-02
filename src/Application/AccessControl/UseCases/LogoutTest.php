<?php

namespace Application\AccessControl\UseCases;

use Tests\TestCase;
use Illuminate\Http\Request;

class LogoutTest extends TestCase
{
    public function test_user_can_logout(): void
    {
        $request = new Request();
        $request->setLaravelSession(app('session')->driver());
        $oldSessionId = $request->session()->getId();

        Logout::handle($request);

        self::assertNotEquals($oldSessionId, $request->session()->getId());
    }
}
