<?php

declare(strict_types=1);

namespace App\User\Create;

interface Repository
{
    public  function create(UserInterface $user): bool;
}