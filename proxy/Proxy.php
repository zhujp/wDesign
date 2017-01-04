<?php 
namespace proxy;

class Proxy
{
    protected $company;

    protected $parts;


    public function __construct($parts)
    {
        $this->parts = $parts;
    }


    public function create()
    {
        switch ($this->parts) {
            case 'screen':
                $this->company = new Screen;
                break;

            case 'memory':
                $this->company = new Memory;
                break;

            default:
                throw new \Exception("手机没有该配件");
                break;
        }

        $this->company->createParts();
    }
}