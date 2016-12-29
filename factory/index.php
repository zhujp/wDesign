<?php 
use factory\driver\XmlFactory;
use factory\driver\JsonFactory;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});


$xmlObj = new XmlFactory;
$xmlObj->boot();
echo '<br>';
$jsonObj = new JsonFactory;
$jsonObj->boot();