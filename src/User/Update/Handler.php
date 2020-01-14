<?php


namespace App\User\Update;


use App\Tests\User\Update\Builder;
use App\Tests\User\Update\Repository;

class Handler
{
    private Command $updateUserCommand;
    private Repository $repository;
    private  Builder $builder;

    public function __construct(Command $updateUserCommand, Repository $repository, Builder $builder)
    {
        $this->updateUserCommand = $updateUserCommand;
        $this->repository = $repository;
        $this->builder = $builder;

    }

    public function handle()
    {
        $user = $this->builder->setFirstName($this->updateUserCommand->getFirstName())
            ->setLastName($this->updateUserCommand->getLastName())
            ->setEmail($this->updateUserCommand->getEmail())
            ->setPassword($this->updateUserCommand->getPassword())
            ->build();
        $this->repository->create($user);
    }
}