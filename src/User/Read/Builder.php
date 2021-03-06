<?php


namespace App\User\Read;

use App\User\Create\User;

interface Builder
{
    public function setFirstName(string $getFirstName):self;

    public function setLastName(string $getLastName):self;

    public function setEmail(string $getEmail):self;

    public function build():User;

}