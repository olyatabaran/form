<?php

declare(strict_types=1);

namespace App\User\Create;


class Handler
{
    /**
     * @var Handler
     */
    private $command;

    private  Repository $userRepository;
    private Builder $userBuilder;
    public function __construct(Command $createUserCommand , Repository $userRepository, Builder $userBuilder)
    {
        $this->command = $createUserCommand;
        $this->userRepository = $userRepository;
        $this->userBuilder = $userBuilder;
    }

    public function handle()
    {
        $user = $this->userBuilder->setFirstName($this->command->getFirstName())
            ->setLastName($this->command->getLastName())
            ->setEmail($this->command->getEmail())
            ->setPassword($this->command->getPassword())
            ->build();
        $this->userRepository->create($user);
    }
}