<?php 
namespace chainOfResponsibility;

/**
 * 辅导员老师
 */
class Instructor extends AbstractHandler
{
    public function doHandle($request)
    {
        echo '辅导员:我处理了'.$request->getName();
    }
}