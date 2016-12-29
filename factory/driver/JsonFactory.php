<?php 
namespace factory\driver;

use factory\Factory;
use factory\product\JsonProduct;
/**
 * 具体工厂实现
 */
class JsonFactory extends Factory
{

    public function boot()
    {
        $this->product = new JsonProduct;

        echo $this->render();
    }
}