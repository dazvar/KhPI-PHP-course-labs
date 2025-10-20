<?php
header('Cache-Control: public, max-age=86400');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
header('Content-Type: image/svg+xml; charset=UTF-8');
$ts = gmdate('c');
?>
<svg xmlns="http://www.w3.org/2000/svg" width="320" height="100" viewBox="0 0 320 100">
  <defs>
    <linearGradient id="g" x1="0" x2="1">
      <stop offset="0" stop-color="#34d399"/>
      <stop offset="1" stop-color="#60a5fa"/>
    </linearGradient>
  </defs>
  <rect x="0" y="0" width="320" height="100" fill="url(#g)"/>
  <text x="16" y="42" font-family="Arial, sans-serif" font-size="20" fill="#003">
    Cached SVG image
  </text>
  <text x="16" y="72" font-family="Arial, sans-serif" font-size="12" fill="#022">
    Generated at: <?php echo htmlspecialchars($ts, ENT_QUOTES, 'UTF-8'); ?>
  </text>
</svg>
