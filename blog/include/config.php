<?php
// blog/include/config.php
// Change these values to match your live setup.

// Detect simple local dev (localhost / 127.0.0.1) to point directly
// to the Node API on port 3001. In production you should proxy /api.
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocal = stripos($host, 'localhost') !== false || $host === '127.0.0.1';

$apiBase = $isLocal ? 'http://localhost:3001/api' : '/api';

// Derive the blog base path from the current script location so that
// it works whether the blog is mounted at /blog/ or under a subfolder.
// If called from /blog/admin/..., normalize back to /blog/.
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/blog/index.php';
$dir = str_replace('\\', '/', dirname($scriptName));
if (substr($dir, -6) === '/admin') {
  $dir = substr($dir, 0, -6);
}
$basePath = rtrim($dir, '/') . '/';

return [
  // Recommended in production: expose Node API via reverse-proxy at /api
  'apiBase'   => $apiBase,
  'basePath'  => $basePath,
  // Used for canonical URLs etc (optional)
  'siteBase'  => 'https://www.theneedleads.com',
];
