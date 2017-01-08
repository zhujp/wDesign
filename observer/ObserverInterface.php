<?php 
namespace observer;

interface ObserverInterface
{
    //观察者收到通知后调用的方法
    public function action();
}