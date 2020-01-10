<?php


namespace App\Tests\User\Read;

class User implements \App\User\Read\User
{
    private int $id = 0;
    private string $firstName = "Vasya";
    private string $lastName = "Pupkin";
    private string $email = "vasya@mail.ru";

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}