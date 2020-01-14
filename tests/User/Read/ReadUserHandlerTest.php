<?php

declare(strict_types=1);

namespace App\Tests\User\Read;
use App\User\Read\Handler;
use App\User\Read\Command;
use PHPUnit\Framework\TestCase;



class ReadUserHandlerTest extends TestCase
{
    public function testReadUser():void
    {
        $readUserCommand = new Command(0);
        $userRepository = new Repository();
        $handler = new Handler($readUserCommand, $userRepository);

        $handler->handle();

        static::assertEquals("Pupkin" , $userRepository->read($readUserCommand->getId())->getLastName());
        static::assertEquals("Vasya" , $userRepository->read($readUserCommand->getId())->getFirstName());
        static::assertEquals("vasya@mail.ru" , $userRepository->read($readUserCommand->getId())->getEmail());
        static::assertEquals(0, $userRepository->read($readUserCommand->getId())->getId());


    }

}
