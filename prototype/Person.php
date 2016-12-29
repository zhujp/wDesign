<?php 
namespace prototype;

use prototype\Sex;

class Person extends AbstractPrototype
{

    public function __construct()
    {
        $this->sex = new Sex;
    }


    public function __set($name,$value)
    {
        $this->$name = $value;
    }

    public function display()
    {
        echo $this->name,' is a '.$this->sex->sex_text."<br>";
    }

    // public function __clone()
    // {   
    //     //深复制
    //     $this->sex = clone $this->sex;
    // }

}