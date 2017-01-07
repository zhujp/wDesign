<?php 
/**
 * 备忘录模式
 * 在不破坏封装性的前提下，捕获一个对象的内部状态，并在该对象之外保存这个状态。
 */

use memento\Originator;
use memento\CareTaker;


spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$oroginator = new Originator;
$oroginator->setState('第一次初始状态');
//从对象获取
echo $oroginator->getState();
$memento_1 = $oroginator->createMemento();
$careTaker = new CareTaker;
$careTaker->add($memento_1);
//从备忘录获取
echo $oroginator->getStateFromMemento($careTaker->get());