<?php 
namespace facade;

class Facade
{

    protected $taobao;

    protected $jd;

    protected $vip;

    protected $kaola;

    public function __construct()
    {
        $this->taobao = new Taobao;
        $this->jd = new Jd;
        $this->vip = new Vip;
        $this->kaola = new Kaola;
    }


    /**
     * 展示顶级电商平台
     * @return [type] [description]
     */
    public function showFirst()
    {
        echo '顶级电商平台:','<br>';
        $this->taobao->showTaobao();
        $this->jd->showJd();
    }

    public function showSecond()
    {
        echo '次级电商平台:','<br>';
        $this->vip->showVip();
        $this->kaola->showKaola();
    }
}