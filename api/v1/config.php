<?php
echo json_encode([
    "site_name"       => "Code5",
    "site_url"        => "https://code5.ug",
    "core_url"        => "https://core.code5.ug",
    "email"           => "info@code5.ug",
    "phone"           => ["+256707465311", "+256393228164", "0772973361"],
    "whatsapp"        => "+256393228164",
    "address"         => "Muyenga Tank Hill Road, Kampala, Uganda",
    "social"          => [
        "facebook"  => "#",
        "twitter"   => "#",
        "linkedin"  => "#",
    ],
    "payment_methods" => [
        ["id" => "airtel_money",  "name" => "Airtel Money",  "code" => "21897177"],
        ["id" => "mtn_mobile_money", "name" => "MTN Mobile Money", "code" => "632877"],
        ["id" => "whatsapp",      "name" => "WhatsApp Order (Manual)"],
    ],
    "app_version"     => "2.0.0",
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
