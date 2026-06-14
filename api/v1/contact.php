<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);

$required = ["name", "email", "subject", "message"];
$missing = array_filter($required, function($f) use ($input) { return empty($input[$f]); });
if ($missing) {
    http_response_code(400);
    echo json_encode(["error" => "Missing fields: " . implode(", ", $missing)]);
    exit;
}

$name = trim($input["name"]);
$email = trim($input["email"]);
$phone = trim($input["phone"] ?? "");
$subject = trim($input["subject"]);
$message = trim($input["message"]);

$to = "info@code5.ug";
$headers = "From: $email\r\nReply-To: $email\r\n";
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

mail($to, $subject, $body, $headers);

echo json_encode([
    "success" => true,
    "message" => "Your message has been sent. We'll get back to you soon.",
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
