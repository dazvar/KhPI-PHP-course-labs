<?php
$cacheDir = __DIR__ . DIRECTORY_SEPARATOR . 'cache';
$cacheFile = $cacheDir . DIRECTORY_SEPARATOR . 'report.html';
$ttl = 600;

if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0777, true);
}

$useCache = file_exists($cacheFile) && (time() - filemtime($cacheFile) < $ttl);

header('Content-Type: text/html; charset=UTF-8');

if ($useCache) {
    readfile($cacheFile);
    exit;
}

$start = microtime(true);
sleep(3);

$rows = [];
for ($i = 1; $i <= 1000; $i++) {
    $name = 'User_' . $i;
    $amount = number_format(mt_rand(1000, 100000) / 100, 2);
    $date = date('Y-m-d', time() - mt_rand(0, 365) * 86400);
    $rows[] = "<tr><td>{$i}</td><td>{$name}</td><td>{$amount}</td><td>{$date}</td></tr>";
}

$duration = number_format(microtime(true) - $start, 3);

$html = "<!doctype html>\n<html lang=\"uk\">\n<head>\n<meta charset=\"UTF-8\">\n<title>Report (file cache)</title>\n<link rel=\"stylesheet\" href=\"client-cache-css.php\">\n</head>\n<body>\n<div class=\"box\">\n  <h1>HTML Report (file cache)</h1>\n  <p class=\"timestamp\">Generated at: " . date('c') . " (took {$duration}s)</p>\n  <p>First load should take ~3s; subsequent loads within 10 minutes are instant from cache.</p>\n</div>\n<table border=\"1\" cellpadding=\"6\" cellspacing=\"0\">\n  <thead><tr><th>#</th><th>Name</th><th>Amount</th><th>Date</th></tr></thead>\n  <tbody>" . implode("\n", $rows) . "</tbody>\n</table>\n</body>\n</html>";

file_put_contents($cacheFile, $html);
echo $html;
