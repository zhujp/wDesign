<?php 
namespace adapter;

class MobileAdapter implements WebInterface
{
    private $mobile;

    public function __construct(MobileInterface $mobile)
    {
        $this->mobile = $mobile;
    }

    public function formatCss()
    {
        $this->mobile->formatCss();
    }


    public function formatGraphics()
    {
        $this->mobile->formatGraphics();
    }

    /**
     * 适应兼容布局
     * @return [type] [description]
     */
    public function horizontalLayout()
    {
        $this->mobile->verticalLayout();
    }
}