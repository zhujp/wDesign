<?php 
namespace chainOfResponsibility;

/**
 * 班主任
 */
class Headmaster extends AbstractHandler
{
    public function doHandle($request)
    {
        echo '班主任:我处理了'.$request->getName();
    }
}