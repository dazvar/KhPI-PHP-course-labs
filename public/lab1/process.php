<?php
// Отримання даних з форми
$firstName = $_POST['first_name'] ?? '';
$lastName = $_POST['last_name'] ?? '';

// Перевірка на порожні значення
if (empty($firstName) || empty($lastName)) {
    echo "Будь ласка, заповніть всі поля.";
    exit;
}

// Перевірка типу (на всяк випадок)
if (!is_string($firstName) || !is_string($lastName)) {
    echo "Помилка у типі даних.";
    exit;
}

// Виведення привітання
echo "Привіт, $firstName $lastName!";
?>
