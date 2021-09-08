<?php

namespace Domain\Repositories\AccessControl;

interface LoginRepositoryInterface
{
    public function attempt(): bool;

    public function logout(): void;
}
