<?php 
require_once 'Singleton.php';

$obj = Singleton::getInstance();
$obj->handle();
// $new_obj = clone $obj;
// $new_obj = new Singleton;

