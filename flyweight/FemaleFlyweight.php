<?php 
namespace flyweight;

/**
 * 具体的亨元类
 */
class FemaleFlyweight implements FlyweightInterface
{
    public function show()
    {
        echo 'My is Female';
    }
}