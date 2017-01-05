<?php 
namespace command;

class Invoker
{
    protected $context;

    public function __construct()
    {
        $this->context = new CommandContext;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function process()
    {
        $cmd = new LoginCommand($this->context->get('receiver'));
        if (!$cmd->execute($this->context)) {
            echo $this->context->getError();
            exit;
        } 

        var_dump($this->context->get('user'));
    }
}