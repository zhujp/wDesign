<?php 
namespace decorator;

/**
 * 抽象的装饰器类
 */
abstract class AbstractDecorator extends AbstractNorvel
{

    protected $norvel;

    public function __construct(AbstractNorvel $norvel)
    {   
        //引入一个对象引用
        $this->norvel = $norvel;
    }

}