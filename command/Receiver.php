<?php 
namespace command;

/**
 * 命令接收者
 */
class Receiver
{

    private $error;
    
    public function login($username,$password)
    {
        if ($username=='test' && $password == '123456') {
            $user = new \stdClass();
            $user->username = $username;
            return $user;
        }

        $this->error = '用户名或者密码错误';

    }


    public function getError()
    {
        return $this->error;
    }
}