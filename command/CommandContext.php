<?php 
namespace command;

class CommandContext
{
    private $params = [];

    private $error;

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function addParam($key,$value)
    {
        $this->params[$key] = $value;
    }

    public function get($key)
    {
        return $this->params[$key];
    }


    public function setError($error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}