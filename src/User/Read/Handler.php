<?php

declare(strict_types=1);

namespace App\User\Read;

class Handler
{
    private Command $readUser;
    private Repository $repository;
    private  $user;

    public function __construct(Command $readUser, Repository $repository)
    {
        $this->readUser = $readUser;
        $this->repository = $repository;
    }
    public function handle()
    {
        $this->user = $this->repository->read($this->readUser->getId());
        return $this->user;
    }
}