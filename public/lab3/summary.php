<?php
session_start();
date_default_timezone_set("Europe/Kyiv");

$cookieName = $_COOKIE['username'] ?? 'Cookie не встановлено';
$sessionName = $_SESSION['username'] ?? 'Сесія не встановлена';
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$page = $_SERVER['PHP_SELF'];
$time = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Підсумкова сторінка</title>
</head>
<body>
<h1>Підсумкова інформація</h1>

<h2>Cookie:</h2>
<p>Ім’я з cookie: <strong><?= htmlspecialchars($cookieName) ?></strong></p>

<h2>Session:</h2>
<p>Ім’я з сесії: <strong><?= htmlspecialchars($sessionName) ?></strong></p>

<h2>Інформація про користувача (через $_SERVER):</h2>
<ul>
    <li><strong>IP-адреса:</strong> <?= htmlspecialchars($ip) ?></li>
    <li><strong>Браузер:</strong> <?= htmlspecialchars($browser) ?></li>
    <li><strong>Сторінка:</strong> <?= htmlspecialchars($page) ?></li>
    <li><strong>Час запиту:</strong> <?= $time ?></li>
</ul>

<p><a href="cookies.php">← Назад до cookie</a></p>
<p><a href="session.php">← Назад до session</a></p>
<p><a href="server_info.php">← Назад до server info</a></p>
</body>
</html>

