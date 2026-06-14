<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit;
}

$endpoint = isset($_GET["endpoint"]) ? trim($_GET["endpoint"], "/") : "";
$method = $_SERVER["REQUEST_METHOD"];

$routes = [
    "config"          => "config.php",
    "products"        => "products.php",
    "order"           => "order.php",
    "contact"         => "contact.php",
    "auth/login"      => "auth/login.php",
    "auth/profile"    => "auth/profile.php",
    "auth/invoices"   => "auth/invoices.php",
    "auth/services"   => "auth/services.php",
    "domain/check"    => "domain-checker-proxy.php",
    "domain/whois"    => "whois-proxy.php",
];

if (isset($routes[$endpoint])) {
    require_once __DIR__ . "/" . $routes[$endpoint];
} else {
    http_response_code(404);
    echo json_encode(["error" => "Endpoint not found", "available" => array_keys($routes)]);
}
