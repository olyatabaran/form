<?php
declare(strict_types=1);


namespace App\Tests\User\Create;


use App\User\Create\UserInterface;

class Builder implements \App\User\Create\Builder
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function setFirstName(string $firstName): \App\User\Create\Builder
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName): \App\User\Create\Builder
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail(string $email): \App\User\Create\Builder
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): \App\User\Create\Builder
    {
        $this->password = $password;
        return $this;
    }

    public function build(): UserInterface
    {
      $user = new User($this->firstName, $this->lastName, $this->email, $this->password);
      return $user;
    }
}