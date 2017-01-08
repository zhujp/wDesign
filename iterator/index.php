<?php 
/**
 * 迭代器模式：在不需要了解内部实现的前提下，遍历一个聚合对象的内部元素
 */


use iterator\User;
use iterator\UserIterator;


spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$user = new User;
$user->addUser('张三');
$user->addUser('李四');
$user->addUser('王五');

$iterator = new UserIterator($user);

while($iterator->valid()) {
    var_dump($iterator->current());
}