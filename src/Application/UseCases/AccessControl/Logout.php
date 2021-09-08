<?php

namespace Application\UseCases\AccessControl;

use Illuminate\Http\Request;
use Domain\Repositories\AccessControl\LoginRepositoryInterface;

class Logout
{
    protected $loginRepository;

    public function __construct()
    {
        $this->loginRepository = app()->make(LoginRepositoryInterface::class);
    }

    public function __invoke(Request $request): void
    {
        $this->loginRepository->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
