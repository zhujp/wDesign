<?php 
/**
 * 桥接模式
 * 一个类存在多个维度扩展的时候，可以考虑桥接模式
 * 例如本例，需要两个维度，书的类型，人的类型
 */

use bridge\Person;
use bridge\Fantasy;
use bridge\Romance;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$person = new Person('Male',new Fantasy);
$person->readLine();

$new_person = new Person('Female',new Romance);
$new_person->readLine();