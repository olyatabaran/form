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

        $updateUserCommand->updatePassword(0, 45321);
        $updateUserCommand->updateLastName(0, "name");

        $userRepository = new Repository();

        $builder = new Builder();

        $handler = new Handler($updateUserCommand , $userRepository, $builder);
    }
}