<?php 
namespace chainOfResponsibility;

/**
 * 任课老师
 */
class Teacher extends AbstractHandler
{
    public function doHandle($request)
    {
        echo '任课老师:我处理了'.$request->getName();
    }
}