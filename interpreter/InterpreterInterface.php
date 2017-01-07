<?php 
namespace interpreter;

/**
 * 解释器接口
 */
interface InterpreterInterface
{
    public function find($table,$where);

    public function delete($table,$where);
}