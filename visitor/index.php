<?php 
/**
 * 访问者模式
 */

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


use visitor\VisitorA;
use visitor\VisitorB;
use visitor\ProductA;
use visitor\ProductB;
use visitor\Structure;


$productA = new ProductA;
$productB = new ProductB;
$visitorA = new visitorA;
$visitorB = new visitorB;
$struct = new Structure;

$struct->attach($productA);
$struct->attach($productB);

$struct->buy($visitorA);
$struct->buy($visitorB);