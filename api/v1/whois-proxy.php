<?php
// Proxy for whois-api.php — returns JSON instead of HTML
if (\["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    exit;
}

\ = \["domain"] ?? "";
if (!\) {
    echo json_encode(["error" => "Domain parameter required"]);
    exit;
}

\ = curl_init();
curl_setopt_array(\, [
    CURLOPT_URL => "https://code5.ug/whois-api.php?domain=" . urlencode(\),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 15,
]);
\ = curl_exec(\);
\ = curl_getinfo(\, CURLINFO_HTTP_CODE);
curl_close(\);

echo json_encode([
    "success" => \ === 200,
    "domain" => \,
    "html" => \,
]);
