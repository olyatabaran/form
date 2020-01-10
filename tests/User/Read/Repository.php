<?php


namespace App\Tests\User\Read;


class Repository implements \App\User\Read\Repository
{
    private User $user;


    public function __construct()
    {
        $this->user = new User();
    }


    public function read(int $id): User
    {
        return new User();
    }
}