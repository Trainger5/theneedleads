<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name   = htmlspecialchars($_POST['name']);
    $email  = htmlspecialchars($_POST['email']);
    $phone  = htmlspecialchars($_POST['phone']);
    $result = htmlspecialchars($_POST['result']);

    // Get user IP
    $ip = $_SERVER['REMOTE_ADDR'];

    // ✅ DB connection (edit with your DB details)
    $conn = new mysqli("localhost", "root", "", "spinwheel");
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    }

    // ✅ Check if email OR IP already used
    $check = $conn->prepare("SELECT id FROM spins WHERE email=? OR ip=? LIMIT 1");
    $check->bind_param("ss", $email, $ip);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "already"; // 🚫 Already played
        exit;
    }

    // ✅ Save new spin entry
    $stmt = $conn->prepare("INSERT INTO spins (name, email, phone, result, ip) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $result, $ip);
    $stmt->execute();

    // ✅ Send email
    $to = "sejalneedleads@gmail.com";
    $subject = "🎡 New Spin Result from $name";

    $message = "
    <html>
    <head><title>Spin Result</title></head>
    <body>
      <h2>New Spin Entry</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Phone:</strong> $phone</p>
      <p><strong>Result:</strong> $result</p>
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
