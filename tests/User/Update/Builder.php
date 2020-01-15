<?php


namespace App\Tests\User\Update;
use App\User\Update;

class Builder implements Update\Bulider
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    public function setFirstName(string $firstName): Update\Bulider
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName(string $lastName): Update\Bulider
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail(string $email): Update\Bulider
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): Update\Bulider
    {
        $this->password = $password;
        return $this;
    }

    public function build(): Update\User
    {
        $user = new User(0, $this->firstName, $this->lastName, $this->email, $this->password);
        return $user;
    }
}