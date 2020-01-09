<?php

declare(strict_types=1);

namespace App\User\Read;

interface User
{
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getEmail(): string;
}