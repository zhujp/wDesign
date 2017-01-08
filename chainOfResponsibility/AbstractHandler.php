<?php 
namespace chainOfResponsibility;

abstract class AbstractHandler
{
    protected $successor = null;

    public function setSuccessor($handler)
    {
        $this->successor = $handler;
    }

    public function handle($request)
    {
        $this->doHandle($request);
        if (!is_null($this->successor)) {
            $this->successor->handle($request);
        }
    }

    abstract public function doHandle($request);
}