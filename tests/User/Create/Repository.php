<?php

declare(strict_types=1);

namespace App\Tests\User\Create;

use App\User\Create\UserInterface;

class Repository implements \App\User\Create\Repository
{
    public bool $createWasCalled = false;

    public UserInterface $user;

    public function create(UserInterface $user): bool
    {
        $this->createWasCalled = true;
        $this->user = $user;

        return true;
    }

}