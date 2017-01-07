<?php 
namespace mediator;

/**
 * 中介
 */
class Mediator
{
    public function show(AbstractPerson $person)
    {
        echo '中介转达:';
        $person->action();
    }
}