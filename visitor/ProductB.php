<?php 
namespace visitor;

class ProductB implements ElementInterface
{
    private $_name;

    public function __construct()
    {
        $this->_name = '商品B';
    }


    public function getName()
    {
        return $this->_name;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->buy($this);
    }
}