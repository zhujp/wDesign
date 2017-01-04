<?php 
/**
 * 装饰器模式
 * 为现有的类添加新的功能
 */

use decorator\Normal;
use decorator\Romance;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


//刚开始我只是想写本正常的小说，一个女主就好了

$normal_norvel = new Normal;

echo '这本小说有',$normal_norvel->getFemale(),'个女主',"\r\n";

//都没人看，我得多加几个漂亮女主
//在不改变原类的情况下，新增功能
$romance_norvel = new Romance($normal_norvel);

echo '这本小说有',$romance_norvel->getFemale(),'个女主',"\r\n";