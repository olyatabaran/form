<?php


namespace App\User\Update;


interface User
{
    public function getId():int;
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getEmail(): string;
    public function getPassword(): string;

    public function setId(int $id):void;
    public function setFirstName(string $firstName): void;
    public function setLastName(string $lastName): void;
    public function setEmail(string $email): void;
    public function setPassword(string $password): void;

}