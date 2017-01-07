<?php 
/**
 * 中介者模式
 * 中介者模式是用来降低多个对象和类之间的通信复杂性。这种模式提供了一个中介类，该类通常处理不同类之间的通信，并支持松耦合，使代码易于维护
 */

use mediator\Landlord;
use mediator\Tenant;
use mediator\Mediator;


spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$tenant = new Tenant('张三');
$landlord = new Landlord('李四');

$mediator = new Mediator();
$mediator->show($tenant);
echo '<br>';
$mediator->show($landlord);
