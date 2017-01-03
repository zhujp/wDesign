<?php 
namespace bridge;

class Fantasy extends AbstractRead
{
    public function read($people)
    {
        echo $people.' read fantasy books';
    }
}