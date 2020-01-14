<?php


namespace App\User\Update;

use App\Tests\User\Update\User;

class Command
{
    private User $user;



    public function updateFirstName($id, $firstName)
    {
        if($id === $this->user->getId()){
            $this->user->setFirstName($firstName);
        }
    }

    public function updateLastName($id, $lastName)
    {
        if($id === $this->user->getId()){
            $this->user->setLastName($lastName);
        }
    }

    public function updateEmail($id, $email)
    {
        if($id === $this->user->getId()){
            $this->user->setEmail($email);
        }
    }

    public function updatePassword($id, $password)
    {
        if($id === $this->user->getId()){
            $this->user->setPassword($password);
        }
    }



//    public function updateUser($id, $user)
//    {
//        if($id === $this->id->getId()){
//            $this->user->getPassword($password);
//
//        }
//    }


}