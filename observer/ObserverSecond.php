<?php 
namespace observer;

class ObserverSecond implements ObserverInterface
{

    public function action()
    {
        echo '我是第二个观察者','<br>';
    }
}