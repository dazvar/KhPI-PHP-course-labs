<?php
declare(strict_types=1);

require_once __DIR__ . '/Product.php';

class DiscountedProduct extends Product
{
    protected float $discount;

    public function __construct(string $name, float $price, string $description = "", float $discount = 0.0)
    {
        parent::__construct($name, $price, $description);

        if ($discount < 0 || $discount > 100) {
            throw new InvalidArgumentException("Знижка повинна бути між 0 та 100%");
        }

        $this->discount = $discount;
    }

    public function getDiscount(): float
    {
        return $this->discount;
    }

    public function getPriceWithDiscount(): float
    {
        $base = $this->getPriceValue();
        return $base * (1 - $this->discount / 100);
    }

    public function getInfo(): string
    {
        $baseFormatted = number_format($this->getPriceValue(), 2);
        $discountedFormatted = number_format($this->getPriceWithDiscount(), 2);

        return "
            <div>
                <strong>Назва:</strong> {$this->name}<br>
                <strong>Ціна без знижки:</strong> {$baseFormatted} грн<br>
                <strong>Знижка:</strong> {$this->discount}%<br>
                <strong>Ціна зі знижкою:</strong> {$discountedFormatted} грн<br>
                <strong>Опис:</strong> {$this->description}<br>
            </div>
        ";
    }
}
