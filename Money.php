<?php
class Money
{
    private $amount;
    private $min;

    public function __construct($amount)
    {
        $this->amount = $amount;
        $this->min = 50;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }

    public function validMin()
    {
        $v = ($this->min == 50) ? true : false;
        return $v;
    }

    public function setMin($a)
    {
         $this->min = $a;
    }

}