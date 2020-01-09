<?php

declare(strict_types=1);

namespace App\Tests\User;

use App\User\Create\UserInterface;
use App\User\Repository\User;

class Repository implements \App\User\Create\Repository
{
    public $createWasCalled = false;
    /**
     * @var User
     */
    public $user = null;

    public function create(UserInterface $user): bool
    {
        $this->createWasCalled = true;
        $this->user = $user;

        return true;
    }

//    public function read(int $id): User
//    {
//        return $user
//    }
}