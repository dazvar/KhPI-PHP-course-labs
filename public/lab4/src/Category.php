<?php
declare(strict_types=1);

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/DiscountedProduct.php';

class Category
{
    public string $name;
    /** @var Product[] */
    protected array $products = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addProduct(Product $p): void
    {
        $this->products[] = $p;
    }

    public function listProducts(): string
    {
        if (empty($this->products)) {
            return "<p>Категорія '{$this->name}' порожня.</p>";
        }

        $out = "<h2>Категорія: {$this->name}</h2>";
        foreach ($this->products as $product) {
            $out .= "<div style='border:1px solid #ccc; margin:5px; padding:5px;'>";
            $out .= $product->getInfo();
            $out .= "</div>";
        }
        return $out;
    }
}
