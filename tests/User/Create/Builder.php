<?php
declare(strict_types=1);


namespace App\Tests\User\Create;


use App\User\Create;

class Builder implements Create\Builder
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function setFirstName(string $firstName): Create\Builder
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName): Create\Builder
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail(string $email): Create\Builder
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): Create\Builder
    {
        $this->password = $password;
        return $this;
    }

    public function build(): Create\User
    {
      $user = new User($this->firstName, $this->lastName, $this->email, $this->password);
      return $user;
    }
}