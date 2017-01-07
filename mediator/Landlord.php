<?php 
namespace mediator;

/**
 * 房东
 */
class Landlord extends AbstractPerson
{
    public function action()
    {
        echo $this->name.':我要出租房';
    }
}