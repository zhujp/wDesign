<?php 
namespace visitor;

/**
 * 访问者接口
 */
interface VisitorInterface
{
    public function buy(ElementInterface $element);
}