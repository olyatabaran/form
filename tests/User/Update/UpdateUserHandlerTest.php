<?php


namespace App\Tests\User\Update;


use App\User\Update\Command;
use App\User\Update\Handler;
use PHPUnit\Framework\TestCase;

class UpdateUserHandlerTest extends TestCase
{
    public function testUpdateUser()
    {

        $updateUserCommand = new Command();

        $updateUserCommand->updatePassword(0, "password");
        $updateUserCommand->updateLastName(0, "nasdsdvsme");
        $updateUserCommand->updateEmail(0, "name");
        $updateUserCommand->updateFirstName(0, "name");

        $userRepository = new Repository();

        $builder = new Builder();

        $handler = new Handler($updateUserCommand, $userRepository, $builder);

        $handler->handle();

        static::assertEquals("name", $userRepository->getUser()->getFirstName());
        static::assertEquals("nasdsdvsme", $userRepository->getUser()->getLastName());
        static::assertEquals("name", $userRepository->getUser()->getEmail());
        static::assertEquals("password", $userRepository->getUser()->getPassword());


    }
}