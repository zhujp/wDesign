<?php 
namespace state;

class OnState implements StateInterface
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnLightOn()
    {
        echo '灯已经亮了<br>';
    }

    public function turnLightOff()
    {
        echo '关闭了灯<br>';
        $this->context->setState($this->context->getOffState());
    }
}