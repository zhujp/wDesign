<?php 
namespace composite;

/**
 * 抽象角色类
 */
abstract class AbstractRole
{   

    public function getComposite()
    {
        return null;
    }

    /**
     * 添加装备
     */
    public function addEquipment(AbstractRole $role)
    {
        throw new \Exception("我是局部类");
        
    }

    /**
     * 移除装备
     * @return [type] [description]
     */
    public function removeEquipment(AbstractRole $role)
    {
        throw new \Exception("我是局部类");
    }

    /**
     * 攻击
     * @return [type] [description]
     */
    abstract public function attack();
}