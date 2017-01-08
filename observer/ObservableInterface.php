<?php 
namespace observer;

/**
 * 观察者接口
 */
interface ObservableInterface
{
    public function attach(ObserverInterface $observer);

    public function detach(ObserverInterface $observer);

    public function notify();
}