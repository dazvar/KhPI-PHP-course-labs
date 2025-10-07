<?php
declare(strict_types=1);

require_once __DIR__ . '/src/AccountInterface.php';
require_once __DIR__ . '/src/BankAccount.php';
require_once __DIR__ . '/src/SavingsAccount.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота №5 — ООП</title>
</head>
<body>
<h1>Лабораторна робота №5</h1>
<h3>Тема: Робота з інтерфейсами, винятками, статичними властивостями</h3>
<hr>

<?php
try {
    echo "<h2>Тестування класу BankAccount</h2>";
    $acc1 = new BankAccount(5000, "UAH");
    echo $acc1->getInfo() . "<br>";

    $acc1->deposit(1500);
    echo "Поповнення на 1500 грн: " . $acc1->getInfo() . "<br>";

    $acc1->withdraw(2000);
    echo "Після зняття 2000 грн: " . $acc1->getInfo() . "<br>";

    try {
        $acc1->withdraw(10000);
    } catch (Exception $e) {
        echo "<span style='color:red;'>Помилка: {$e->getMessage()}</span><br>";
    }

    echo "<hr><h2>Тестування класу SavingsAccount</h2>";

    $savings = new SavingsAccount(10000, "USD");
    echo $savings->getInfo() . "<br>";

    $savings->deposit(2000);
    echo "Після поповнення: " . $savings->getInfo() . "<br>";

    $savings->applyInterest();
    echo "Після нарахування відсотків (" . SavingsAccount::$interestRate . "%): " . $savings->getInfo() . "<br>";

} catch (Exception $e) {
    echo "<p style='color:red;'>Помилка: {$e->getMessage()}</p>";
}
?>

</body>
</html>
