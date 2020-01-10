<?php


namespace App\Tests\User\Read;

use App\User\Create\UserInterface;

class Builder implements \App\User\Read\Builder
{
    private string $firstName;
    private string $lastName;
    private string $email;

    public function setFirstName(string $firstName): \App\User\Read\Builder
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName): \App\User\Read\Builder
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail(string $email): \App\User\Read\Builder
    {
        $this->email = $email;
        return $this;
    }

    public function build():UserInterface
    {
       $user = new User($this->firstName, $this->lastName, $this->email, $this->password);
      return $user;
    }
}