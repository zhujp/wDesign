<?php 
namespace memento;
/**
 * 管理者
 */
class CareTaker
{

    protected $memento = [];

    public function add(Memento $memento)
    {
        return array_push($this->memento, $memento);
    }

    public function get()
    {
        return array_pop($this->memento);
    }
}