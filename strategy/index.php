<?php 
/**
 * 策略模式
 */


use strategy\Context;
use strategy\InlineStrategy;
use strategy\OnlineStrategy;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});




echo '线下:';
$context = new Context(new InlineStrategy);
$context->show();
echo '<br>';
echo '线上:';
$context = new Context(new OnlineStrategy);
$context->show();
