<?php 
namespace observer;

class ObserverFirst implements ObserverInterface
{

    public function action()
    {
        echo '我是第一个观察者','<br>';
    }
}