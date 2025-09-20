<?php
$uploadDir = 'uploads/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$file = $_FILES['fileToUpload'];

if (is_uploaded_file($file['tmp_name'])) {
    $originalName = basename($file['name']);
    $fileType = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    $fileSize = $file['size'];

    $allowedTypes = ['jpg', 'jpeg', 'png'];
    if (!in_array($fileType, $allowedTypes)) {
        exit("❌ Дозволено лише файли з розширенням JPG, JPEG або PNG.");
    }

    if ($fileSize > 2 * 1024 * 1024) {
        exit("❌ Файл перевищує допустимий розмір у 2 МБ.");
    }

    $targetFile = $uploadDir . $originalName;
    if (file_exists($targetFile)) {
        $uniqueId = date("Ymd_His") . "_" . rand(1000, 9999);
        $targetFile = $uploadDir . pathinfo($originalName, PATHINFO_FILENAME) . "_$uniqueId.$fileType";
    }

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        $sizeKB = round($fileSize / 1024, 2);
        echo "<h3>✅ Файл успішно завантажено!</h3>";
        echo "Ім’я файлу: " . basename($targetFile) . "<br>";
        echo "Тип: $fileType<br>";
        echo "Розмір: $sizeKB КБ<br>";
        echo "<a href='$targetFile' download>📥 Завантажити файл</a>";
    } else {
        echo "❌ Помилка при збереженні файлу.";
    }
} else {
    echo "❌ Файл не було завантажено.";
}
?>
<br><br>
<a href="index.html">← Назад</a>
