<?php 
/**
 * 观察者模式是把客户元素（观察者）从一个中心类（主体）中分离出来，当主体知道事件发生时，观察者需要被通知到
 */

use observer\ObserverFirst;
use observer\ObserverSecond;
use observer\Observable;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$observable = new Observable;
$observerFirst = new ObserverFirst;
$observerSecond = new ObserverSecond;
$observable->attach($observerFirst);
$observable->attach($observerSecond);
$observable->notify();
echo  '<hr>';
$observable->detach($observerFirst);
$observable->notify();