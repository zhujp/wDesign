<?php 
namespace bridge;

class Person extends AbstractPerson
{

    protected $people;

    public function __construct($people,AbstractRead $read)
    {
        $this->read = $read;

        $this->people = $people;
    }

    public function readLine()
    {
        $this->read->read($this->people);
    }
}