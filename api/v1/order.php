<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);

$required = ["name", "email", "phone", "items"];
$missing = array_filter($required, function($f) use ($input) { return empty($input[$f]); });
if ($missing) {
    http_response_code(400);
    echo json_encode(["error" => "Missing fields: " . implode(", ", $missing)]);
    exit;
}

$name = trim($input["name"]);
$email = trim($input["email"]);
$phone = trim($input["phone"]);
$items = $input["items"];
$paymentMethod = $input["payment_method"] ?? "whatsapp";
$notes = $input["notes"] ?? "";

$totalAmount = array_sum(array_map(function($item) {
    return $item['price'] * $item['quantity'];
}, $items));

$confirmationId = "C5-" . strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));

$paymentInstructions = null;
$waMsg = "New Order #$confirmationId\n";
$waMsg .= "Name: $name\nEmail: $email\nPhone: $phone\n";

if ($paymentMethod === "airtel_money") {
    $paymentInstructions = [
        "method" => "airtel_money",
        "merchant_code" => "21897177",
        "amount" => $totalAmount,
        "currency" => "UGX",
        "account_name" => "CODE5 UGANDA",
        "steps" => [
            "Dial *185#",
            "Select Airtel Money",
            "Select Pay Merchant",
            "Enter merchant code 21897177",
            "Enter amount " . number_format($totalAmount) . " UGX",
            "Enter your PIN to confirm",
        ],
    ];
    $waMsg .= "Payment: Airtel Money\n";
    $waMsg .= "Merchant: 21897177\n";
    $waMsg .= "Amount: " . number_format($totalAmount) . " UGX\n";
} elseif ($paymentMethod === "mtn_mobile_money") {
    $paymentInstructions = [
        "method" => "mtn_mobile_money",
        "merchant_code" => "632877",
        "amount" => $totalAmount,
        "currency" => "UGX",
        "account_name" => "CODE5 UGANDA",
        "steps" => [
            "Dial *165#",
            "Select Mobile Money",
            "Select Pay Merchant",
            "Enter merchant code 632877",
            "Enter amount " . number_format($totalAmount) . " UGX",
            "Enter your PIN to confirm",
        ],
    ];
    $waMsg .= "Payment: MTN Mobile Money\n";
    $waMsg .= "Merchant: 632877\n";
    $waMsg .= "Amount: " . number_format($totalAmount) . " UGX\n";
} else {
    $waMsg .= "Payment: WhatsApp (Manual)\n";
}

foreach ($items as $item) {
    $waMsg .= "- {$item['name']} x{$item['quantity']} @ {$item['price']} UGX\n";
}
if ($notes) $waMsg .= "Notes: $notes\n";

$whatsappUrl = "https://wa.me/+256933228164?text=" . urlencode($waMsg);

$dbHost = getenv("DB_HOST") ?: "localhost";
$dbName = getenv("DB_NAME") ?: "code5";
$dbUser = getenv("DB_USER") ?: "code5_user";
$dbPass = getenv("DB_PASS") ?: "Code5DB!2024";

$conn = @new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn->connect_error) {
    $stmt = $conn->prepare("INSERT INTO orders (confirmation_id, name, email, phone, items, payment_method, notes, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, 'pending', NOW())");
    $itemsJson = json_encode($items);
    $stmt->bind_param("sssssss", $confirmationId, $name, $email, $phone, $itemsJson, $paymentMethod, $notes);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

$response = [
    "success"         => true,
    "confirmation_id" => $confirmationId,
    "whatsapp_url"    => $whatsappUrl,
    "message"         => "Order submitted successfully. We will contact you shortly.",
];
if ($paymentInstructions) {
    $response["payment_instructions"] = $paymentInstructions;
}

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
