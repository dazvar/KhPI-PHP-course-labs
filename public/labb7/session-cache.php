<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

$ttl = 600;
$now = time();
$hasCache = isset($_SESSION['session_cache_data'], $_SESSION['session_cache_ts']) && ($now - (int)$_SESSION['session_cache_ts'] < $ttl);

if ($hasCache) {
    $data = $_SESSION['session_cache_data'];
    $source = 'session (cached)';
    $duration = 0.000;
} else {
    $start = microtime(true);
    sleep(2);
    $data = [];
    for ($i = 0; $i < 8; $i++) {
        $data[] = [
            'title' => 'Product ' . chr(65 + $i),
            'price' => number_format(mt_rand(100, 5000) / 100, 2),
        ];
    }
    $_SESSION['session_cache_data'] = $data;
    $_SESSION['session_cache_ts'] = $now;
    $source = 'generated';
    $duration = microtime(true) - $start;
}
?>
<!doctype html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Session cache demo</title>
  <link rel="stylesheet" href="client-cache-css.php">
</head>
<body>
  <div class="box">
    <h1>Кеш у сесії (TTL 10 хв)</h1>
    <p class="timestamp">Джерело: <?php echo htmlspecialchars($source, ENT_QUOTES, 'UTF-8'); ?>. Час виконання: <?php echo number_format($duration, 3); ?>s</p>
  </div>
  <ul>
    <?php foreach ($data as $row): ?>
      <li><?php echo htmlspecialchars($row['title'] . ' — ' . $row['price'], ENT_QUOTES, 'UTF-8'); ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
