<?php 
namespace command;

/**
 * 登录命令
 */
class LoginCommand extends AbstractCommand
{

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }


    public function execute(CommandContext $context)
    {
        $username = $context->get('username');
        $password = $context->get('password');
        $user = $this->receiver->login($username,$password);
        if (empty($user)) {
            $context->setError($this->receiver->getError());
            return false;
        }

        $context->addParam('user',$user);
        return true;
    }
}