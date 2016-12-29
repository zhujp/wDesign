<?php
namespace factory\product;

use factory\ProductInterface;
/**
 * 具体产品类－json
 */
class JsonProduct implements ProductInterface
{

    public function createProduct()
    {
        return 'json data';
    }
}