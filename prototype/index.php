<?php 
use prototype\Person;
use prototype\Sex;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

/**
 * 浅复制
 * PHP文档有说：当对象被复制后，PHP 5 会对对象的所有属性执行一个浅复制（shallow copy）。所有的引用属性 仍然会是一个指向原来的变量的引用（http://php.net/manual/zh/language.oop5.cloning.php）。
 * @var Person
 */
$person = new Person;
$person->name = 'vilay';
//sex属性是一个对象
$person->sex = new Sex;

$person->display();

$new_person = clone $person;

$person->sex->setSexText('female');
//虽然new_person是克隆对象，但是如果访问对象的引用属性，最终是指向一个值，修改person的sex对象的属性值，new_person的也会改变，这个是浅复制
$new_person->display();
//结果：
//vilay is a male
//vilay is a female

//深复制,在person类的__clone()方法中，属性对象复制一次（本示例中把__clone()注释去掉即可）
//结果:
//vilay is a male
//vilay is a female


