<?php 
/**
 * 模版方法
 * 如果明确了算法的一些步骤，不过这些步骤可以采用多种不同的实现，就可以使用模版方法
 * 抽象模版中定义执行顺序，具体实现累，实现模版方法中的抽象方法
 */


use templateMethod\Product;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$product = new Product;
$product->templateMethod();