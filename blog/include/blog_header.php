<?php
// blog/include/blog_header.php
$cfg = require __DIR__ . '/config.php';
$page_title = $page_title ?? 'Blog';
$extra_head = $extra_head ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <?php echo $extra_head; ?>
  <script>
    window.__BLOG_CONFIG = {
      apiBase: <?php echo json_encode($cfg['apiBase']); ?>,
      basePath: <?php echo json_encode($cfg['basePath']); ?>
    };
  </script>
</head>
<body>
