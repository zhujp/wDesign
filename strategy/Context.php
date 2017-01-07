<?php 
namespace strategy;

class Context
{
    private $strategy;


    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }


    public function show()
    {
        echo $this->strategy->caculatePrice();
    }
}