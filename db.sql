CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    country_code VARCHAR(10) NOT NULL,   -- e.g. +1, +44, +91
    phone VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    referral_code VARCHAR(20) UNIQUE,
    referred_by INT NULL,
    referral_balance DECIMAL(12,2) DEFAULT 0,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    city VARCHAR(100),
    state VARCHAR(100),
    postal_code VARCHAR(20),
    country VARCHAR(100),
    data json DEFAULT '{}',
    status ENUM('active','inactive','banned') DEFAULT 'active',
    email_verified_at TIMESTAMP NULL,
    others json DEFAULT '{}',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (referred_by) REFERENCES users(id) ON DELETE SET NULL
);
ALTER TABLE users 
ADD COLUMN if NOT EXISTS uid VARCHAR(200) UNIQUE AFTER id;


CREATE TABLE IF NOT EXISTS referral_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    referrer_id INT NOT NULL,
    referred_user_id INT NOT NULL,
    amount DECIMAL(12,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (referrer_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (referred_user_id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL UNIQUE,
    description TEXT,
    icon VARCHAR(255),
    status ENUM('active','inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cover_img json DEFAULT '{}',
    name text NOT NULL,
    user_id INT NOT NULL,
    description TEXT,
    category_name VARCHAR(220),
    pro_status ENUM('expensive','cheaper') DEFAULT 'cheaper',
    user_status ENUM('active','inactive','suspended') DEFAULT 'active',
    instock BOOLEAN DEFAULT TRUE,
    location VARCHAR(255),
    time_frame VARCHAR(100),
    amount DECIMAL(12,2) NOT NULL,
    country VARCHAR(100),
    country_code VARCHAR(10),
    data JSON DEFAULT '{}',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);