<?php 
namespace state;

class Context
{
    private $offState;

    private $onState;

    private $currentState;

    public function __construct()
    {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        //灯初始状态为关闭
        $this->currentState = $this->offState;
    }

    /**
     * 触发器
     * @return [type] [description]
     */
    public function turnOnLight()
    {
        $this->currentState->turnLightOn();
    }

    public function turnOffLight()
    {
        $this->currentState->turnLightOff();
    }


    /**
     * 灯状态设置
     * @param StateInterface $state [description]
     */
    public function setState(StateInterface $state)
    {
        $this->currentState = $state;
    }


    /**
     * 获取灯状态
     * @return [type] [description]
     */
    public function getOnState()
    {
        return $this->onState;
    }


    public function getOffState()
    {
        return $this->offState;
    }
}