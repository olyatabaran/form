<?php

declare(strict_types=1);

namespace App\Tests\User\Create;

use App\User\Create\User;

class Repository implements \App\User\Create\Repository
{
    public bool $createWasCalled = false;

    public User $user;

    public function create(User $user): bool
    {
        $this->createWasCalled = true;
        $this->user = $user;

        return true;
    }

}