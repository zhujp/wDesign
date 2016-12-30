<?php 
namespace abstractFactory;

/**
 * 用户接口
 */
interface UserInterface
{
    public function create();

    public function delete();
}