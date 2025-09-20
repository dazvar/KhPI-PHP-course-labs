<?php
date_default_timezone_set("Europe/Kyiv");

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$page = $_SERVER['PHP_SELF'];
$time = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Інформація про користувача</title>
</head>
<body>
<h2>Дані, отримані через $_SERVER:</h2>
<ul>
    <li><strong>IP-адреса:</strong> <?= htmlspecialchars($ip) ?></li>
    <li><strong>Браузер:</strong> <?= htmlspecialchars($browser) ?></li>
    <li><strong>Сторінка:</strong> <?= htmlspecialchars($page) ?></li>
    <li><strong>Час запиту:</strong> <?= $time ?></li>
</ul>
</body>
</html>

