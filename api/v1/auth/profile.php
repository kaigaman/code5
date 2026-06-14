<?php
// Placeholder — requires WHMCS API credentials
http_response_code(501);
echo json_encode([
    "error" => "Not implemented",
    "message" => "WHMCS API credentials required. Configure in api/v1/auth/config.php",
]);
