<?php 
namespace bridge;

class Romance extends AbstractRead
{
    public function read($people)
    {
        echo $people.' read romance books';
    }
}