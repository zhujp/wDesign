<?php 
namespace builder\norvel;

use builder\AbstractBuilder;
/**
 * 具体建造者-仙逆小说
 */
class Xianni extends AbstractBuilder
{

    public function createName()
    {
        $this->norvel->name = '仙逆';
    }


    public function createLeadRole()
    {
        $this->norvel->leadRole = '王林';
    }


    public function createProperty()
    {
        $this->norvel->property = '神';
    }
}