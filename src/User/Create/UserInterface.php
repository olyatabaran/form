<?php

declare(strict_types=1);

namespace App\User\Create;

interface UserInterface
{
    public function __construct(string $firsName, string $lastName, string $email, string $password);
}