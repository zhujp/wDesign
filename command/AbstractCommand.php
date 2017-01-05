<?php 
namespace command;

abstract class AbstractCommand
{
    abstract public function execute(CommandContext $context);
}