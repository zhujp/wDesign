<?php 
namespace abstractFactory\user;

use abstractFactory\UserInterface;

class MysqliUser implements UserInterface
{

    public function create()
    {
        return 'mysqli create user';
    }

    public function delete()
    {
        return 'mysqli delete user';
    }
}