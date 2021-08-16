<?php

namespace UseCases\AccessControl;

use Illuminate\Http\Request;

class Logout
{
    public function __invoke(Request $request): void
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
