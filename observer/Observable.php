<?php 
namespace observer;

class Observable implements ObservableInterface
{
    private $_observers = [];

    public function attach(ObserverInterface $observer)
    {
        if (!in_array($observer,$this->_observers)) {
            $this->_observers[] = $observer;
        }

    }

    public function detach(ObserverInterface $observer)
    {
        if (!empty($this->_observers)) {
            foreach ($this->_observers as $key => $val) {
                if ($val === $observer) {
                    unset($this->_observers[$key]);
                }
            }
        }
    }

    public function notify()
    {
        if (!empty($this->_observers)) {
            foreach ($this->_observers as $observer) {
                $observer->action();
            }
        }
    }
}