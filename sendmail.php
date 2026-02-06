<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name   = trim($_POST['name'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $phone  = trim($_POST['phone'] ?? '');
    $result = trim($_POST['result'] ?? '');

    // Basic validation
    $lettersOnly = preg_replace('/[^A-Za-z]/', '', $name);
    $digits = preg_replace('/\D/', '', $phone);

    if (strlen($lettersOnly) < 4) {
        echo "invalid_name";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid_email";
        exit;
    }
    if (strlen($digits) < 7 || strlen($digits) > 15) {
        echo "invalid_phone";
        exit;
    }

    $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $safeResult = htmlspecialchars($result, ENT_QUOTES, 'UTF-8');

    // Get user IP
    $ip = $_SERVER['REMOTE_ADDR'];

    // DB connection (edit with your DB details)
    $conn = new mysqli("localhost", "root", "", "spinwheel");
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    }

    // Check if email OR IP already used
    $check = $conn->prepare("SELECT id FROM spins WHERE email=? OR ip=? LIMIT 1");
    $check->bind_param("ss", $safeEmail, $ip);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "already";
        exit;
    }

    // Save new spin entry
    $stmt = $conn->prepare("INSERT INTO spins (name, email, phone, result, ip) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $safeName, $safeEmail, $safePhone, $safeResult, $ip);
    $stmt->execute();

    // Send email
    $to = "sejalneedleads@gmail.com";
    $subject = "New Spin Result from $safeName";

    $message = "
    <html>
    <head><title>Spin Result</title></head>
    <body>
      <h2>New Spin Entry</h2>
      <p><strong>Name:</strong> $safeName</p>
      <p><strong>Email:</strong> $safeEmail</p>
      <p><strong>Phone:</strong> $safePhone</p>
      <p><strong>Result:</strong> $safeResult</p>
      <p><strong>IP:</strong> $ip</p>
    </body>
    </html>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: admin@bpadsoftware.com\r\n";
    $headers .= "CC: gurmeet9899@gmail.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
