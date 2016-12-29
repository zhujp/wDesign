<?php 
namespace factory\driver;

use factory\Factory;
use factory\product\XmlProduct;
/**
 * 具体工厂实现
 */
class XmlFactory extends Factory
{

    public function boot()
    {
        $this->product = new XmlProduct;

        echo $this->render();
    }
}