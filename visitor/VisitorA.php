<?php 
namespace visitor;

class VisitorA implements VisitorInterface
{
    public function buy(ElementInterface $element)
    {
        echo '访问者A：'.$element->getName(),'<br>';
    }
}