<?php 
/**
 * 状态模式
 * 状态模式的作用就是允许对象在改变状态时改变它的行为，游戏通常就是用这种模式
 */

use state\Context;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$context = new Context;
$context->turnOnLight();
$context->turnOnLight();
$context->turnOffLight();
$context->turnOffLight();