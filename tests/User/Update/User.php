<?php


namespace App\Tests\User\Update;


class User implements \App\User\Update\User
{
    private string $id;

    private string $firstName;

    private string $lastName;

    private string $email;

    private string $password;


    public function __construct($id = 0, $firstName = '', $lastName = '', $email = '', $password = '')
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->password = $password;
        $this->lastName = $lastName;
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


    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName):void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }





}