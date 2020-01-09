<?php

declare(strict_types=1);

namespace App\Tests\User\Read;

use App\Tests\User\Repository;
use App\User\Read\Handler;
use App\User\Read\Command;
use PHPUnit\Framework\TestCase;

class ReadUserHandlerTest extends TestCase
{
    public function testReadUser():void
    {
        $readUserCommand = new Command(10);
        $userRepository = new Repository();
//        $handler = new Handler($readUserCommand, $userRepository);
    }
}
