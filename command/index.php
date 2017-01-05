<?php 
/**
 * 命令模式
 * 抽象命令类:AbstractCommand
 * 具体实现类:LoginCommand
 * 调用者类:Invoker
 * 接收者类:Receiver
 * 参数处理类:CommandContext
 */

use command\Invoker;
use command\Receiver;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$invoker = new Invoker;
$context = $invoker->getContext();
$context->addParam('receiver',new Receiver);
$context->addParam('username','test');
$context->addParam('password','123456');
$invoker->process();
