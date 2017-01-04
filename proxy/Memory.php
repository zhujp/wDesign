<?php 
namespace proxy;

class Memory implements IphoneInterface
{
    public function createParts()
    {
        echo '我生产内存';
    }
}