<?php 
namespace adapter;

class Mobile implements MobileInterface
{

    public function formatCss()
    {
        echo '<style>font-size:1.6em;color:red;</style>';
    }


    public function formatGraphics()
    {
        echo '我是图片';
    }

    /**
     * 移动端采用垂直布局
     * @return [type] [description]
     */
    public function verticalLayout()
    {
        echo '垂直布局';
    }
}