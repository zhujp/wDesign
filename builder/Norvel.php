<?php 
namespace builder;
/**
 * 具体产品-小说
 */

class Norvel
{   
    //小说名
    public $name;

    //主角
    public $leadRole;

    //属性
    public $property;

    public function show()
    {
        echo $this->name.':'.$this->leadRole.','.$this->property;
        echo '<br>';
    }
}