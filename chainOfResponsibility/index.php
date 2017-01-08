<?php 
/**
 * 职责链模式
 * 职责链模式将请求的发送者与接收者分开，避免两者的耦合，这个模式允许请求者沿着一个链传递到多个不同的对象，使这些对象都有机会处理这些请求，发送者不需要知道哪一个对象处理了，接收者对象也不需要知道是谁发送的。这样的好处是，任何对象都可以向处理请求对象发送请求，而且处理请求可以改变，从而结合更多或不同对象来处理请求，请求者和处理者都可以改变，不必担心带来系统的破坏
 */


use chainOfResponsibility\Request;
use chainOfResponsibility\Teacher;
use chainOfResponsibility\Headmaster;
use chainOfResponsibility\Instructor;

spl_autoload_register(function ($class) {
    require dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$class).'.php';
});

$request = new Request('请假条');

$teacher = new Teacher;
$instructor = new Instructor;
$headMaster = new Headmaster;
$teacher->setSuccessor($instructor);
$instructor->setSuccessor($headMaster);

$teacher->handle($request);