<?php 
/**
 * 外观模式
 * 外观模式为一个分层或者一个子系统创建一个单一的入口,为系统中的一组接口提供一个统一的页面
 */


use facade\Facade;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$facade = new Facade;
$facade->showFirst();
$facade->showSecond();