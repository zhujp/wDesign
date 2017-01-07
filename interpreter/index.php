<?php 
/**
 * 解释器模式
 * 解释一个上下文
 */


use interpreter\Interpreter;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$interpreter = new Interpreter;
$interpreter->find('users','user_id=1');
echo '<br>';
$interpreter->find('users',['user_id'=>1]);
echo '<br>';
$interpreter->delete('users',['user_id'=>1]);