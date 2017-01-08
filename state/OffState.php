<?php 
namespace state;

class OffState implements StateInterface
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnLightOn()
    {
        echo '开了灯<br>';
        $this->context->setState($this->context->getOnState());
    }

    public function turnLightOff()
    {
        echo '灯已经关闭<br>';
        
    }
}