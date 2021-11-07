<?php

namespace Src\Domain\Repositories\AccessControl;

interface LoginRepositoryInterface
{
    public function attempt(): bool;

    public function logout(): void;
}
