<?php 
namespace templateMethod;

class Product extends AbstractTemplate
{
    protected $total = 0;

    protected $shipping_fee = 0;

    public function productTotal()
    {
        return $this->total += 100;
    }

    public function shippingFee()
    {
        return $this->shipping_fee += 8;
    }

    public function show()
    {
        echo $this->total + $this->shipping_fee;
    }
}