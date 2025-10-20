<?php
header('Cache-Control: public, max-age=86400');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
header('Content-Type: text/css; charset=UTF-8');
?>
body { font-family: Arial, sans-serif; margin: 2rem; }
.box { padding: 1rem; border: 2px solid #0a7; background: #eafff5; border-radius: 8px; }
.timestamp { color: #777; font-size: 0.9rem; }
