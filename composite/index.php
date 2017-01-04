<?php 
/**
 * 组合模式
 * 组合模式定义了一个单根继承体系,使截然不同职责的集合可以并肩工作
 * 本例以游戏角色和它的装备体系来说明
 * 基础角色攻击力为1，可以通过加装备提升个人攻击力
 */

use composite\Knife;
use composite\Force;
use composite\BasicRole;
use composite\SuperRole;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$role = new SuperRole;

if (!is_null($role->getComposite())) {
    $role->addEquipment(new BasicRole);
    $role->addEquipment(new Knife);
    $role->addEquipment(new Force);
}


echo '我的攻击力是：',$role->attack();