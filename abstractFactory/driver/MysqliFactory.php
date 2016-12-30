<?php 
namespace abstractFactory\driver;

use abstractFactory\FactoryInterface;
use abstractFactory\user\MysqliUser;

class MysqliFactory implements FactoryInterface
{
    public function createUser()
    {
        return new MysqliUser;
    }
}