<?php 
namespace builder\norvel;

use builder\AbstractBuilder;
/**
 * 具体建造者-我欲封天小说
 */
class Fengtian extends AbstractBuilder
{

    public function createName()
    {
        $this->norvel->name = '我欲封天';
    }


    public function createLeadRole()
    {
        $this->norvel->leadRole = '孟浩';
    }


    public function createProperty()
    {
        $this->norvel->property = '妖';
    }
}