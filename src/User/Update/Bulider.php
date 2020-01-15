<?php


namespace App\User\Update;


interface Bulider
{
    public function setFirstName(string $getFirstName):self;

    public function setLastName(string $getLastName):self;

    public function setEmail(string $getEmail):self;

    public function setPassword(string $getPassword):self;

    public function build():User;

}