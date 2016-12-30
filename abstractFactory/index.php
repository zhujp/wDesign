<?php 
/**
 * 抽象工厂模式
 */

use abstractFactory\driver\PdoFactory;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$factory = new PdoFactory;
$user = $factory->createUser();
echo $user->create();
echo '<br>';
echo $user->delete();