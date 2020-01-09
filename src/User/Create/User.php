<?php

declare(strict_types=1);

namespace App\User\Create;

interface User
{
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getEmail(): string;
    public function getPassword(): string;
}