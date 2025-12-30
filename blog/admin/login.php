<?php
// blog/admin/login.php
session_start();
$cfg = require __DIR__ . '/config.php';
$error = '';
$csrf = '';
if (empty($_SESSION['blog_admin_csrf'])) {
  $_SESSION['blog_admin_csrf'] = bin2hex(random_bytes(16));
}
$csrf = $_SESSION['blog_admin_csrf'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $token = isset($_POST['csrf']) ? $_POST['csrf'] : '';
  if (!hash_equals($_SESSION['blog_admin_csrf'] ?? '', $token)) {
    $error = 'Invalid session token, please try again.';
  } else {
  $u = isset($_POST['username']) ? trim($_POST['username']) : '';
  $p = isset($_POST['password']) ? (string)$_POST['password'] : '';

  $usernameOk = hash_equals($cfg['username'], $u);

  // Prefer secure password_verify, but fall back to plain match if needed
  $passwordOk = false;
  if (is_string($cfg['password_hash']) && $cfg['password_hash'] !== '') {
    if (function_exists('password_verify')) {
      $passwordOk = password_verify($p, $cfg['password_hash']);
    }
    if (!$passwordOk && hash_equals($cfg['password_hash'], $p)) {
      // Fallback: allow plain-text password in config for local/dev
      $passwordOk = true;
    }
  }

  if ($usernameOk && $passwordOk) {
    $_SESSION['blog_admin_logged_in'] = true;
    header('Location: index.php');
    exit;
  }

  $error = 'Invalid username or password';
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Admin Login</title>
  <link rel="stylesheet" href="assets/css/admin.css">
  <style>
    .login-wrap{max-width:420px;margin:60px auto;padding:24px;border:1px solid #e5e7eb;border-radius:14px;background:#fff;}
    .login-wrap h1{margin:0 0 16px;}
    .login-wrap label{display:block;margin:12px 0 6px;font-weight:600;}
    .login-wrap input{width:100%;padding:10px 12px;border:1px solid #d1d5db;border-radius:10px;}
    .login-wrap button{margin-top:16px;width:100%;padding:10px 12px;border:0;border-radius:10px;cursor:pointer;}
    .err{color:#b91c1c;margin:8px 0;}
  </style>
</head>
<body>
  <div class="login-wrap">
    <h1>Admin Login</h1>
    <?php if ($error): ?><div class="err"><?php echo htmlspecialchars($error); ?></div><?php endif; ?>
    <form method="post">
      <input type="hidden" name="csrf" value="<?php echo htmlspecialchars($csrf, ENT_QUOTES); ?>">
      <label>Username</label>
      <input name="username" autocomplete="username" required>
      <label>Password</label>
      <input name="password" type="password" autocomplete="current-password" required>
      <button type="submit">Sign in</button>
    </form>
    <p style="margin-top:14px;font-size:13px;opacity:.8;">Default credentials are set in <code>blog/admin/config.php</code>.</p>
  </div>
</body>
</html>
