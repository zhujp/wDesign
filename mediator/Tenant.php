<?php 
namespace mediator;

/**
 * 租客
 */
class Tenant extends AbstractPerson
{
    public function action()
    {
        echo $this->name.':我要租房';
    }
}