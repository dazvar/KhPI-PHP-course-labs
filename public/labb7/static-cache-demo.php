<?php
require_once __DIR__ . '/StaticCache.php';
header('Content-Type: text/html; charset=UTF-8');
$start = microtime(true);
$data = StaticCache::getData();
$elapsed = number_format(microtime(true) - $start, 3);
?>
<!doctype html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Static cache demo</title>
  <link rel="stylesheet" href="client-cache-css.php">
</head>
<body>
  <div class="box">
    <h1>Static property cache (per-process)</h1>
    <p class="timestamp">Call duration: <?php echo htmlspecialchars($elapsed, ENT_QUOTES, 'UTF-8'); ?>s. First call ~2s, subsequent within 10 minutes are instant.</p>
  </div>
  <img src="client-cache-image.php" alt="Cached SVG" width="320" height="100" />
  <h2>Items</h2>
  <ul>
    <?php foreach ($data['items'] as $item): ?>
      <li><?php echo htmlspecialchars($item['code'] . ' — ' . $item['price'] . ' @ ' . $item['time'], ENT_QUOTES, 'UTF-8'); ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
