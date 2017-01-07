<?php 
namespace mediator;

abstract class AbstractPerson
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function action();
}