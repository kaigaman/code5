<?php
header('Content-Type: application/json');

$domain = isset($_GET['domain']) ? trim($_GET['domain']) : '';
$tld = isset($_GET['tld']) ? trim($_GET['tld']) : '';

if (!$domain || !$tld) {
    echo json_encode(['status' => 'error', 'message' => 'Missing domain or TLD']);
    exit;
}

$domain = preg_replace('/[^a-z0-9\-]/i', '', $domain);
$tld = '.' . ltrim(preg_replace('/[^a-z0-9\-\.]/i', '', $tld), '.');
$fqdn = $domain . $tld;

if (strlen($domain) < 1) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid domain name']);
    exit;
}

// Domain prices (matching brochure)
$prices = [
    '.com' => 40000, '.net' => 40000, '.org' => 40000,
    '.info' => 70000, '.biz' => 70000, '.me' => 60000,
    '.co' => 90000, '.tv' => 110000, '.co.uk' => 50000,
    '.org.uk' => 50000, '.shop' => 130000, '.church' => 110000,
    '.app' => 70000, '.africa' => 80000, '.tours' => 100000,
    '.ug' => 100000, '.co.ug' => 100000, '.or.ug' => 100000,
    '.ac.ug' => 100000, '.go.ug' => 100000, '.sc.ug' => 100000,
    '.org.ug' => 100000, '.com.ug' => 100000,
];
$price = isset($prices[$tld]) ? $prices[$tld] : 45000;

// RDAP endpoints for gTLDs
$rdap_endpoints = [
    '.com' => 'https://rdap.verisign.com/com/v1/domain/' . $fqdn,
    '.net' => 'https://rdap.verisign.com/net/v1/domain/' . $fqdn,
    '.org' => 'https://rdap.publicinterestregistry.org/rdap/domain/' . $fqdn,
    '.info' => 'https://rdap.afilias.net/rdap/domain/' . $fqdn,
    '.biz' => 'https://rdap.neulevel.biz/rdap/domain/' . $fqdn,
    '.co' => 'https://rdap.nic.co/domain/' . $fqdn,
    '.me' => 'https://rdap.nic.me/domain/' . $fqdn,
    '.tv' => 'https://rdap.nic.tv/domain/' . $fqdn,
    '.shop' => 'https://rdap.nic.shop/domain/' . $fqdn,
    '.app' => 'https://rdap.nic.app/domain/' . $fqdn,
    '.africa' => 'https://rdap.afilias.net/rdap/domain/' . $fqdn,
    '.tours' => 'https://rdap.nic.tours/domain/' . $fqdn,
    '.church' => 'https://rdap.nic.church/domain/' . $fqdn,
    '.co.uk' => 'https://rdap.nominet.uk/rdap/domain/' . $fqdn,
    '.org.uk' => 'https://rdap.nominet.uk/rdap/domain/' . $fqdn,
];

// .ug TLDs — use WHOIS
$ug_tlds = ['.ug', '.co.ug', '.or.ug', '.ac.ug', '.go.ug', '.sc.ug', '.org.ug', '.com.ug'];

// Helper: cURL GET, returns [body, http_code]
function http_get($url, $timeout = 10) {
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_CONNECTTIMEOUT => $timeout,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTPHEADER => ['Accept: application/json'],
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
        $body = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return [$body, $http_code];
    } elseif (ini_get('allow_url_fopen')) {
        $ctx = stream_context_create(['http' => [
            'timeout' => $timeout,
            'method' => 'GET',
            'header' => 'Accept: application/json',
            'ignore_errors' => true,
        ]]);
        $body = @file_get_contents($url, false, $ctx);
        $http_code = 0;
        if (isset($http_response_header[0])) {
            preg_match('/\s(\d{3})\s/', $http_response_header[0], $m);
            $http_code = intval($m[1] ?? 0);
        }
        return [$body, $http_code];
    }
    return [false, 0];
}

// Helper: WHOIS lookup via fsockopen
function whois_lookup($domain, $whois_server, $port = 43, $timeout = 10) {
    $fp = @fsockopen($whois_server, $port, $errno, $errstr, $timeout);
    if (!$fp) return false;
    stream_set_timeout($fp, $timeout);
    fwrite($fp, $domain . "\r\n");
    $response = '';
    while (!feof($fp)) {
        $response .= fread($fp, 4096);
    }
    fclose($fp);
    return $response;
}

// --- MAIN LOOKUP ---

// 1) .ug TLDs — use WHOIS
if (in_array($tld, $ug_tlds)) {
    $whois_raw = whois_lookup($domain . $tld, 'whois.co.ug');
    if ($whois_raw === false) {
        echo json_encode([
            'status' => 'unknown',
            'message' => 'Unable to check .' . ltrim($tld, '.') . ' availability right now. Please request a quote.',
            'domain' => $fqdn,
            'price' => $price,
        ]);
        exit;
    }
    if (stripos($whois_raw, 'Domain not Found') !== false || stripos($whois_raw, 'No match') !== false) {
        echo json_encode([
            'status' => 'available',
            'domain' => $fqdn,
            'message' => $fqdn . ' is available!',
            'price' => $price,
        ]);
    } elseif (stripos($whois_raw, 'Active') !== false || stripos($whois_raw, 'ACTIVE') !== false || stripos($whois_raw, 'Domain Name:') !== false) {
        echo json_encode([
            'status' => 'taken',
            'domain' => $fqdn,
            'message' => $fqdn . ' is already registered.',
        ]);
    } else {
        echo json_encode([
            'status' => 'unknown',
            'message' => 'Unable to verify. Please request a quote.',
            'domain' => $fqdn,
            'price' => $price,
        ]);
    }
    exit;
}

// 2) Known RDAP gTLDs
if (isset($rdap_endpoints[$tld])) {
    list($response, $http_code) = http_get($rdap_endpoints[$tld]);

    if ($response === false || $response === '') {
        // RDAP failed — try WHOIS fallback
        $whois_servers = [
            '.com' => 'whois.verisign-grs.com',
            '.net' => 'whois.verisign-grs.com',
            '.org' => 'whois.publicinterestregistry.org',
            '.info' => 'whois.afilias.net',
            '.biz' => 'whois.neulevel.biz',
        ];
        $whois_server = isset($whois_servers[$tld]) ? $whois_servers[$tld] : null;
        if ($whois_server) {
            $whois_raw = whois_lookup($fqdn, $whois_server);
            if ($whois_raw !== false) {
                if (preg_match('/No match for|NOT FOUND|not found|No Data Found|DOMAIN NOT FOUND/i', $whois_raw)) {
                    echo json_encode([
                        'status' => 'available',
                        'domain' => $fqdn,
                        'message' => $fqdn . ' is available!',
                        'price' => $price,
                    ]);
                    exit;
                } elseif (preg_match('/Domain Name:|Registry Domain ID:|Registrar:/i', $whois_raw)) {
                    echo json_encode([
                        'status' => 'taken',
                        'domain' => $fqdn,
                        'message' => $fqdn . ' is already registered.',
                    ]);
                    exit;
                }
            }
        }
        echo json_encode([
            'status' => 'unknown',
            'message' => 'Unable to verify. Please request a quote.',
            'domain' => $fqdn,
            'price' => $price,
        ]);
        exit;
    }

    if ($http_code === 404) {
        echo json_encode([
            'status' => 'available',
            'domain' => $fqdn,
            'message' => $fqdn . ' is available!',
            'price' => $price,
        ]);
    } elseif ($http_code === 200) {
        echo json_encode([
            'status' => 'taken',
            'domain' => $fqdn,
            'message' => $fqdn . ' is already registered.',
        ]);
    } else {
        echo json_encode([
            'status' => 'unknown',
            'message' => 'Unable to verify (code ' . $http_code . '). Please request a quote.',
            'domain' => $fqdn,
            'price' => $price,
        ]);
    }
    exit;
}

// 3) Fallback — try generic WHOIS
$whois_raw = whois_lookup($fqdn, 'whois.verisign-grs.com');
if ($whois_raw !== false) {
    if (preg_match('/No match for|NOT FOUND|not found/i', $whois_raw)) {
        echo json_encode([
            'status' => 'available',
            'domain' => $fqdn,
            'message' => $fqdn . ' is available!',
            'price' => $price,
        ]);
        exit;
    } elseif (preg_match('/Domain Name:|Registry Domain ID:/i', $whois_raw)) {
        echo json_encode([
            'status' => 'taken',
            'domain' => $fqdn,
            'message' => $fqdn . ' is already registered.',
        ]);
        exit;
    }
}

echo json_encode([
    'status' => 'unknown',
    'message' => 'Unable to verify. Please request a quote.',
    'domain' => $fqdn,
    'price' => $price,
]);
