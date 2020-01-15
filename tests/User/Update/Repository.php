<?php


namespace App\Tests\User\Update;

class Repository implements \App\User\Update\Repository
{
    private User $user;


    public function __construct()
    {
        $this->user = new User();
    }

    public function update($user): User
    {
          $this->user = $user;

          return $this->user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}