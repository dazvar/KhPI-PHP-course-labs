<?php
$uploadDir = 'uploads/';

echo "<h2>📁 Список завантажених файлів</h2>";

if (is_dir($uploadDir)) {
    $files = array_diff(scandir($uploadDir), ['.', '..']);

    if (empty($files)) {
        echo "Папка порожня.";
    } else {
        echo "<ul>";
        foreach ($files as $file) {
            $path = $uploadDir . $file;
            echo "<li><a href='$path' download>$file</a></li>";
        }
        echo "</ul>";
    }
} else {
    echo "Папка не знайдена.";
}
?>
<br><br>
<a href="index.html">← Назад</a>
