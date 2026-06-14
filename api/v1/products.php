<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents(__DIR__ . '/products.json'), true);

echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
