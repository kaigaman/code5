CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    confirmation_id VARCHAR(20) NOT NULL UNIQUE,
    
ame VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    items JSON NOT NULL,
    payment_method VARCHAR(50) DEFAULT 'whatsapp',
    
otes TEXT,
    status ENUM('pending', 'confirmed', 'completed', 'cancelled') DEFAULT 'pending',
    created_at DATETIME NOT NULL,
    updated_at DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    INDEX (confirmation_id),
    INDEX (email),
    INDEX (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
