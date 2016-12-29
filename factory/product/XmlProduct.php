<?php
namespace factory\product;

use factory\ProductInterface;
/**
 * 具体产品类－xml
 */
class XmlProduct implements ProductInterface
{

    public function createProduct()
    {
        return 'xml data';
    }
}