<?php 
/**
 * 适配器模式
 * 适配器模式有两种形式，类和对象，这个是对象适配器的示例
 * 类适配器模式通过继承来实现，对象适配器模式是通过组合来实现
 */

use adapter\Mobile;
use adapter\MobileAdapter;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$mobile = new Mobile;

$adapter = new MobileAdapter($mobile);

$adapter->formatCss();
$adapter->formatGraphics();
$adapter->horizontalLayout();