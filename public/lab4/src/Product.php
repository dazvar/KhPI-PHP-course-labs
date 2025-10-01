<?php
declare(strict_types=1);

class Product
{
    public string $name;
    public string $description;
    protected float $price;

    public function __construct(string $name, float $price, string $description = "")
    {
        if ($price < 0) {
            throw new InvalidArgumentException("Ціна не може бути від’ємною");
        }

        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    protected function getPriceValue(): float
    {
        return $this->price;
    }

    public function getPrice(): float
    {
        return $this->getPriceValue();
    }

    public function getInfo(): string
    {
        $priceFormatted = number_format($this->getPriceValue(), 2);
        return "
            <div>
                <strong>Назва:</strong> {$this->name}<br>
                <strong>Ціна:</strong> {$priceFormatted} грн<br>
                <strong>Опис:</strong> {$this->description}<br>
            </div>
        ";
    }
}
