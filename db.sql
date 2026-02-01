-- Database Table for Transaction Logging
-- You can run this in your CyberPanel MySQL / phpMyAdmin

CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    payment_id VARCHAR(100),
    trx_id VARCHAR(100),
    amount DECIMAL(10, 2),
    status VARCHAR(50) DEFAULT 'Pending',
    bcb_user_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
