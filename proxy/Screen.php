<?php 
namespace proxy;

class Screen implements IphoneInterface
{
    public function createParts()
    {
        echo '我生产屏幕';
    }
}