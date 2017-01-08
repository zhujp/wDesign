<?php 
namespace templateMethod;

/**
 * 抽象模版类
 * 以商品购买为例，算法步骤是固定的，先算商品本身的价格,计算物流费用，
 */
abstract class AbstractTemplate
{

    public function templateMethod()
    {   
        //计算税
        $this->productTotal();
        //计算物流费用
        $this->shippingFee();
        //展示商品价格
        $this->show();
    }

    abstract public function productTotal();

    abstract public function shippingFee();

    abstract public function show();
}