<?php
$logFile = "log.txt";

if (isset($_POST['userText'])) {
    $text = trim($_POST['userText']);
    $timestamp = date("Y-m-d H:i:s");

    $entry = "[$timestamp] $text\n";
    file_put_contents($logFile, $entry, FILE_APPEND);
}

echo "<h3>📄 Вміст log.txt</h3>";
if (file_exists($logFile)) {
    $content = file_get_contents($logFile);
    echo "<pre>" . htmlspecialchars($content) . "</pre>";
} else {
    echo "Файл log.txt ще не створено.";
}
?>
<br><br>
<a href="index.html">← Назад</a>
