<?php

namespace Application\AccessControl\UseCases;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login
{
    public static function handle(string $email, string $password, Request $request): bool
    {
        $logged = Auth::attempt(['email' => $email, 'password' => $password]);

        if ($logged) {
            $request->session()->regenerate();
        }

        return $logged;
    }
}
