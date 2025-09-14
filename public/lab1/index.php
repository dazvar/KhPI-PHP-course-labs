<?php
// ===== 1. Базовий PHP-скрипт =====
// Виводить "Hello, World!" на екран
echo "Hello, World!<br><br>";

// ===== 2. Змінні та типи даних =====
$string = "Це рядок";
$integer = 42;
$float = 3.14;
$boolean = true;

echo "Значення змінних:<br>";
echo $string . "<br>";
echo $integer . "<br>";
echo $float . "<br>";
echo $boolean . "<br><br>";

echo "Типи змінних:<br>";
var_dump($string);
echo "<br>";
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($boolean);
echo "<br><br>";

// ===== 3. Конкатенація рядків =====
$firstName = "Ярослав";
$lastName = "Ярмак";

$fullName = $firstName . " " . $lastName;
echo "Повне ім'я: " . $fullName . "<br><br>";

// ===== 4. Умовні конструкції =====
$number = 7;
if ($number % 2 == 0) {
    echo "$number — парне число<br><br>";
} else {
    echo "$number — непарне число<br><br>";
}

// ===== 5. Цикли =====
echo "Цикл for (1 до 10):<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "Цикл while (10 до 1):<br>";
$j = 10;
while ($j >= 1) {
    echo $j . " ";
    $j--;
}
echo "<br><br>";

// ===== 6. Масиви =====
$student = [
    "ім'я" => "Олександр",
    "прізвище" => "Петренко",
    "вік" => 20,
    "спеціальність" => "Інформатика"
];

echo "Інформація про студента:<br>";
echo "Ім'я: " . $student["ім'я"] . "<br>";
echo "Прізвище: " . $student["прізвище"] . "<br>";
echo "Вік: " . $student["вік"] . "<br>";
echo "Спеціальність: " . $student["спеціальність"] . "<br><br>";

$student["середній_бал"] = 91.5;

echo "Оновлений масив:<br>";
print_r($student);
?>
