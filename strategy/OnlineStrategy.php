<?php 
namespace strategy;

/**
 * 网上价格策略
 */
class OnlineStrategy implements StrategyInterface
{
    public function caculatePrice()
    {
        return '衣服本身价格';
    }
}