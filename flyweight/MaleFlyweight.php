<?php 
namespace flyweight;

/**
 * 具体的亨元类
 */
class MaleFlyweight implements FlyweightInterface
{
    public function show()
    {
        echo 'My is Male';
    }
}