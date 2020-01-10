<?php

declare(strict_types=1);

namespace App\User\Read;

class Command
{
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}