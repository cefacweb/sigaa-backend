<?php

namespace Application\AccessControl\UseCases;

use Illuminate\Http\Request;

class Logout
{
    public static function handle(Request $request): void
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
