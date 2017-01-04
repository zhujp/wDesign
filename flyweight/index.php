<?php 
/**
 * 亨元模式
 * 主要用于减少创建对象的数量，以减少内存占用和提高性能
 */

use flyweight\FactoryFlyweight;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$factory = new FactoryFlyweight;
$obj = $factory->create('female');
$obj->show();
echo "<br>";
$obj = $factory->create('female');
$obj->show();

echo "<br>";
$obj = $factory->create('female');
$obj->show();

echo "<br>";
$obj = $factory->create('male');
$obj->show();