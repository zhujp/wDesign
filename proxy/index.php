<?php 
/**
 * 代理模式
 */

use proxy\Proxy;


spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


//未使用代理都是直接实例化类
//例如:$screen = new Screen;$screen->createParts();
//使用代理全部委托给代理去处理
$proxy = new Proxy('screen');
$proxy->create();
$proxy = new Proxy('memory');
$proxy->create();