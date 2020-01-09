<?php

declare(strict_types=1);

namespace App\User\Read;

use App\User\Repository\User;

interface Repository
{
    public  function read(int $id): User;//@todo
}