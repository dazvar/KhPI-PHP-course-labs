<?php
declare(strict_types=1);

require_once __DIR__ . '/src/Product.php';
require_once __DIR__ . '/src/DiscountedProduct.php';
require_once __DIR__ . '/src/Category.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота №4 — ООП</title>
</head>
<body>
<h1>Лабораторна робота №4</h1>
<p>Тема: Об'єктно-орієнтоване програмування в PHP</p>
<hr>

<?php
try {
    $p1 = new Product("Кружка з логотипом", 199.99, "Керамічна кружка, 350 мл");
    $p2 = new Product("Блокнот A5", 79.50, "М’яка обкладинка, 80 аркушів");
    $d1 = new DiscountedProduct("Футболка 'Code'", 499.00, "100% бавовна, розмір M", 20.0);
    $d2 = new DiscountedProduct("Навушники", 1299.00, "Bluetooth 5.0, безпровідні", 10.0);

    $cat1 = new Category("Подарунки");
    $cat1->addProduct($p1);
    $cat1->addProduct($d1);

    $cat2 = new Category("Офіс");
    $cat2->addProduct($p2);
    $cat2->addProduct($d2);

    echo $cat1->listProducts();
    echo "<hr>";
    echo $cat2->listProducts();

} catch (Exception $e) {
    echo "<p style='color:red;'>Помилка: {$e->getMessage()}</p>";
}
?>

</body>
</html>
