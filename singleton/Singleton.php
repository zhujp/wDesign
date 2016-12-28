<?php 
/**
 * 单例模式
 */
class Singleton
{
    //存储实例
    private static $_instance;

    /**
     * 构造方法必须私有
     */
    private function __construct()
    {

    }


    /**
     * 对外提供唯一获取实例入口
     * @return [type] [description]
     */
    public static function getInstance()
    {   
        //确认实例是否属于当前类
        if (!self::$_instance instanceof self) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }


    /**
     * 测试方法
     * @return [type] [description]
     */
    public function handle()
    {
        echo 'hello world';
    }


    /**
     * 防止对象克隆,破坏单例
     * @return [type] [description]
     */
    private function __clone()
    {

    }

}