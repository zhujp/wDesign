<?php  
namespace decorator;

/**
 * 普通小说
 */
class Normal extends AbstractNorvel
{
    protected $female = 1;

    public function getFemale()
    {
        return $this->female;
    }
}