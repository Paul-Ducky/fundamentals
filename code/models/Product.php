<?php
declare(strict_types=1);

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private float $tax;
    private float $totPrice;

    public function __construct(int $id,string $name,float $price,float $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
        $this->totPrice = round($price * (1+$tax), 2);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    public function getTotPrice(): float
    {
        return $this->totPrice;
    }

}
