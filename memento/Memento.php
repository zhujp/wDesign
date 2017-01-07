<?php 
namespace memento;

/**
 * 备忘录类
 */
class Memento
{
    protected $state;

    public function __construct($state)
    {
        $this->state = $state;
    }


    public function getState()
    {
        return $this->state;
    }
}