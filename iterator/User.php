<?php 
namespace iterator;

class User implements UserInterface
{

    private $_users = [];

    public function addUser($user)
    {
        $this->_users[] = $user;
    }

    public function getUsers()
    {
        return $this->_users;
    }
}