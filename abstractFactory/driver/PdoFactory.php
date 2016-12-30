<?php 
namespace abstractFactory\driver;

use abstractFactory\FactoryInterface;
use abstractFactory\user\PdoUser;

class PdoFactory implements FactoryInterface
{
    public function createUser()
    {
        return new PdoUser;
    }
}