<?php 
namespace adapter;

class Web implements WebInterface
{
    public function formatCss()
    {
        echo '<style>color:red;</style>';
    }


    public function formatGraphics()
    {
        echo '我是图片';
    }

    /**
     * Web上采用水平布局
     * @return [type] [description]
     */
    public function horzontalLayout()
    {
        echo '水平布局';
    }

}