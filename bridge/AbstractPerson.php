<?php 
namespace bridge;

abstract class AbstractPerson
{
    protected $read;

    public function __construct(AbstractRead $read)
    {
        $this->read = $read;
    }


    abstract public function readLine();
    
}