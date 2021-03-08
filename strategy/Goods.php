<?php


class Goods
{
    protected $goods;
    protected $clientData;

    public function __construct($goods, $clientData)
    {
        $this->goods = $goods;
        $this->clientData = $clientData;
    }

    public function sort(IPay $pay)
    {
        return $pay->compare($this->goods);
    }

    public function total(IPay $pay)
    {
        return $pay->total($this->goods);
    }

    public function data(IPay $pay)
    {
        return $pay->data($this->clientData);
    }
}