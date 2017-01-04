<?php 
namespace flyweight;

/**
 * 亨元工厂
 */
class FactoryFlyweight
{   
    //对象存储池
    protected static $bool = [];

    public function create($type)
    {
        if (array_key_exists($type, self::$bool)) {
            echo '对象存储池数据取的对象:';
            return self::$bool[$type];
        }
        switch ($type) {
            case 'male':
                $object = new MaleFlyweight;
                break;

            case 'female':
                $object = new FemaleFlyweight;
                break;
            
            default:
                throw new \Exception("没有该类型的对象");
                
                break;
        }

        self::$bool[$type] = $object;
        echo '新创建的对象:';
        return self::$bool[$type];
    }
}