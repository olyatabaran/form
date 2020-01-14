<?php


namespace App\User\Update;


interface Repository
{
    public function update($user): User;
}