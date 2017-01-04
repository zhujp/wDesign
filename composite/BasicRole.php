<?php 
namespace composite;

/**
 * 基础角色
 */
class BasicRole extends AbstractRole
{
    public function attack()
    {
        return 1;
    }
}