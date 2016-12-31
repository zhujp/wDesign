<?php 
namespace builder\norvel;

use builder\AbstractBuilder;
/**
 * 具体建造者-求魔小说
 */
class Qiumo extends AbstractBuilder
{

    public function createName()
    {
        $this->norvel->name = '求魔';
    }


    public function createLeadRole()
    {
        $this->norvel->leadRole = '苏铭';
    }


    public function createProperty()
    {
        $this->norvel->property = '魔';
    }
}