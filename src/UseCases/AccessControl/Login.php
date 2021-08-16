<?php

namespace UseCases\AccessControl;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login
{
    public function __invoke(string $email, string $password, Request $request): bool
    {
        $logged = Auth::attempt(['email' => $email, 'password' => $password]);

        if ($logged) {
            $request->session()->regenerate();
        }

        return $logged;
    }
}
