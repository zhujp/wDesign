<?php 
namespace memento;

/**
 * 发起者
 */
class Originator
{

    protected $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }


    public function createMemento()
    {
        return new Memento($this->state);
    }


    public function getStateFromMemento(Memento $memento)
    {
        return $memento->getState();
    }
}