<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Http\Request;
use Domain\Repositories\AccessControl\LoginRepositoryInterface;

class Login
{
    protected $loginRepository;

    public function __construct()
    {
        $this->loginRepository = app()->make(LoginRepositoryInterface::class);
    }

    public function __invoke(string $email, string $password, Request $request): bool
    {
        $logged = $this->loginRepository->attempt(['email' => $email, 'password' => $password]);

        if ($logged) {
            $request->session()->regenerate();
        }

        return $logged;
    }
}
