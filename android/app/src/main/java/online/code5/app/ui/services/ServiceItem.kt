package online.code5.app.ui.services

data class ServiceItem(
    val id: String,
    val name: String,
    val description: String,
    val iconLetter: String,
    val features: List<String> = emptyList(),
    val priceFrom: String? = null
)

val servicesList = listOf(
    ServiceItem(
        id = "web_hosting",
        name = "Web Hosting",
        description = "Fast and reliable shared hosting with cPanel, LiteSpeed, and 99.9% uptime guarantee.",
        iconLetter = "H",
        features = listOf(
            "cPanel Control Panel",
            "LiteSpeed Web Server",
            "Free SSL Certificate",
            "99.9% Uptime Guarantee",
            "24/7 Support",
            "1-Click Installer",
            "Daily Backups",
            "Free Website Migration"
        ),
        priceFrom = "UGX 15,000/mo"
    ),
    ServiceItem(
        id = "domains",
        name = "Domain Registration",
        description = "Register your domain name with .ug, .com, .org, .net, and many more TLDs.",
        iconLetter = "D",
        features = listOf(
            "Free WHOIS Privacy",
            "DNS Management",
            "Domain Forwarding",
            "Bulk Registration",
            "Domain Transfer",
            "24/7 Management Portal"
        ),
        priceFrom = "UGX 35,000/yr"
    ),
    ServiceItem(
        id = "vps",
        name = "VPS Hosting",
        description = "Virtual private servers with full root access, SSD storage, and dedicated resources.",
        iconLetter = "V",
        features = listOf(
            "Full Root Access",
            "SSD Storage",
            "Dedicated Resources",
            "Choice of OS",
            "cPanel/WHM Available",
            "DDoS Protection",
            "Snapshots & Backups",
            "99.9% Uptime"
        ),
        priceFrom = "UGX 45,000/mo"
    ),
    ServiceItem(
        id = "ssl",
        name = "SSL Certificates",
        description = "Secure your website with trusted SSL certificates from DigiCert, Let's Encrypt, and more.",
        iconLetter = "S",
        features = listOf(
            "DV, OV & EV Certificates",
            "Wildcard SSL",
            "256-bit Encryption",
            "Trust Seal",
            "30-day Money Back",
            "Free Re-issuance"
        ),
        priceFrom = "UGX 85,000/yr"
    ),
    ServiceItem(
        id = "email",
        name = "Email Hosting",
        description = "Professional business email hosting with Google Workspace and Microsoft 365 integration.",
        iconLetter = "E",
        features = listOf(
            "Business Email Accounts",
            "Google Workspace",
            "Microsoft 365",
            "Webmail Access",
            "Spam Protection",
            "Auto-responders",
            "Email Forwarding"
        ),
        priceFrom = "UGX 10,000/mo"
    ),
    ServiceItem(
        id = "dedicated",
        name = "Dedicated Servers",
        description = "High-performance dedicated server hosting with full control and dedicated resources.",
        iconLetter = "R",
        features = listOf(
            "Full Root Access",
            "Dedicated Hardware",
            "Custom Configuration",
            "DDoS Protection",
            "24/7 Monitoring",
            "Managed Support Available"
        ),
        priceFrom = "UGX 250,000/mo"
    ),
    ServiceItem(
        id = "reseller",
        name = "Reseller Hosting",
        description = "Start your own web hosting business with white-label reseller hosting solutions.",
        iconLetter = "R",
        features = listOf(
            "White-label Platform",
            "cPanel/WHM",
            "Resource Management",
            "Client Billing",
            "Free WHMCS License",
            "24/7 Support"
        ),
        priceFrom = "UGX 95,000/mo"
    ),
    ServiceItem(
        id = "security",
        name = "Website Security",
        description = "Protect your website with advanced security tools including malware scanning and DDoS protection.",
        iconLetter = "W",
        features = listOf(
            "Malware Scanning",
            "Malware Removal",
            "DDoS Protection",
            "Web Application Firewall",
            "Security Monitoring",
            "Automatic Updates"
        ),
        priceFrom = "UGX 25,000/mo"
    )
)
