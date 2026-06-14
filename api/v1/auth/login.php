<?php
if (\["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

\ = json_decode(file_get_contents("php://input"), true);

if (empty(\[\"email\"]) || empty(\[\"password\"])) {
    http_response_code(400);
    echo json_encode(["error" => "Email and password required"]);
    exit;
}

\ = "https://core.code5.ug/login";

\ = curl_init();
curl_setopt_array(\, [
    CURLOPT_URL => \,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        "username" => \["email"],
        "password" => \["password"],
    ]),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_COOKIEJAR => "/tmp/whmcs_cookies_" . session_id() . ".txt",
    CURLOPT_COOKIEFILE => "/tmp/whmcs_cookies_" . session_id() . ".txt",
    CURLOPT_TIMEOUT => 15,
]);

\ = curl_exec(\);
\ = curl_getinfo(\, CURLINFO_HTTP_CODE);
curl_close(\);

if (strpos(\, "login") === false && \ === 200) {
    echo json_encode([
        "success" => true,
        "message" => "Logged in successfully",
        "redirect" => "https://core.code5.ug/clientarea.php",
    ]);
} else {
    http_response_code(401);
    echo json_encode([
        "success" => false,
        "message" => "Invalid credentials or WHMCS login failed",
    ]);
}
