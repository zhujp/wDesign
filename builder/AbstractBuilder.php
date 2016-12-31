<?php 
namespace builder;

/**
 * 小说抽象建造者
 */
abstract class AbstractBuilder
{
    //存储小说实例
    protected $norvel;

    public function __construct()
    {
        $this->norvel = new Norvel;
    }

    /**
     * 创建小说的名字
     * @return [type] [description]
     */
    abstract function createName();

    /**
     * 创建主角
     * @return [type] [description]
     */
    abstract function createLeadRole();

    /**
     * 创建主角属性
     * @return [type] [description]
     */
    abstract function createProperty();


    /**
     * 小说展示
     * @return [type] [description]
     */
    public function showNorvel()
    {
        $this->norvel->show();
    }
}