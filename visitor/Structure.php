<?php 
namespace visitor;

/**
 * 对象结构集合
 */
class Structure
{
    public $elements = [];

    public function attach(ElementInterface $element)
    {
        if (!in_array($element,$this->elements)) {
            $this->elements[] = $element;
        }
    }


    public function detach(ElementInterface $element)
    {
        if (!empty($this->elements)) {
            foreach ($this->elements as $key => $val) {
                if ($val === $element) {
                    unset($this->elements[$key]);
                }
            }
        }
    }


    public function buy(VisitorInterface $visitor)
    {
        if (!empty($this->elements)) {
            foreach ($this->elements as $element) {
                $element->accept($visitor);
            }
        }
    }
}