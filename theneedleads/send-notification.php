<?php
$ch = curl_init("https://pushads123.com/api/customer/notify");

$data = [
  "title" => "Hello World!",
  "body" => "Your first push notification 🚀",
  "url" => "https://www.theneedleads.com",
  "icon" => "https://www.theneedleads.com/assets/img/logo.png"
];

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Authorization: 2bb69634-bde2-4694-af0d-b13f9399ec46",
  "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
