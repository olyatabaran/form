<?php

declare(strict_types=1);

namespace App\User\Read;

interface Repository
{
    public function read(int $id): User;
}