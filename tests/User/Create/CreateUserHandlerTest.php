<?php

declare(strict_types=1);

namespace App\Tests\User\Create;

use App\Tests\User\Repository;
use App\User\Create\Command;
use App\User\Create\Handler;
use PHPUnit\Framework\TestCase;

class CreateUserHandlerTest extends TestCase
{
      public function testCreateUser(): void
      {
          $createUserCommand = new Command("First name", "Last name", "email", "password");

          $userRepository = new Repository();

          $builder = new Builder();

          $userHandler = new Handler($createUserCommand , $userRepository, $builder);

          $userHandler->handle();

          static::assertEquals(true , $userRepository->createWasCalled);
          static::assertEquals($createUserCommand->getFirstName() , $userRepository->user->getFirstName());
          static::assertEquals($createUserCommand->getLastName() , $userRepository->user->getLastName());
          static::assertEquals($createUserCommand->getEmail() , $userRepository->user->getEmail());
          static::assertEquals($createUserCommand->getPassword() , $userRepository->user->getPassword());
      }
}