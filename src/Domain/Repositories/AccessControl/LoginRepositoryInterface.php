<?php

namespace Domain\Repositories\AccessControl;

interface LoginRepositoryInterface
{
    public function attempt(): bool;
}
