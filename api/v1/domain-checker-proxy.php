<?php
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    exit;
}

$domain = $_GET["domain"] ?? "";
if (!$domain) {
    echo json_encode(["error" => "Domain parameter required"]);
    exit;
}

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => "https://code5.ug/domain-checker.php?domain=" . urlencode($domain),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
]);
$html = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo json_encode([
    "success" => $code === 200,
    "domain" => $domain,
    "html" => $html,
]);
