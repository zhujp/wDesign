<?php 
namespace strategy;

/**
 * 商品线下价格策略
 */
class InlineStrategy implements StrategyInterface
{

    public function caculatePrice()
    {
        return '衣服本身价格＋店铺门店价格';
    }
}