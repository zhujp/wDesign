<?php 
namespace factory;
/**
 * 工厂接口
 */
abstract class Factory
{

    protected $product;

    /**
     * 工厂启动
     */
    protected abstract function boot();

    /**
     * 渲染数据
     * @return [type] [description]
     */
    public function render()
    {
        return $this->product->createProduct();
    }

}