<?php 
namespace visitor;

class VisitorB implements VisitorInterface
{
    public function buy(ElementInterface $element)
    {
        echo '访问者B:'.$element->getName(),'<br>';
    }
}