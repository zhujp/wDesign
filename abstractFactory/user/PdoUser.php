<?php 
namespace abstractFactory\user;

use abstractFactory\UserInterface;

class PdoUser implements UserInterface
{

    public function create()
    {
        return 'pdo create user';
    }

    public function delete()
    {
        return 'pdo delete user';
    }
}