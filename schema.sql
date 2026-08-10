-- Evolve Clothing Co. PostgreSQL Database Schema

-- 1. Admins Table
CREATE TABLE IF NOT EXISTS admins (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Default Admin (Password is 'evolveadmin' - please change after login!)
-- Hash generated using bcrypt for 'evolveadmin'
INSERT INTO admins (email, password_hash) 
VALUES ('admin@evolveclothing.com', '$2b$10$YourHashedPasswordHere');

-- 2. Leads Table
CREATE TABLE IF NOT EXISTS leads (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    company VARCHAR(255),
    message TEXT,
    lead_type VARCHAR(50) DEFAULT 'Contact Form',
    status VARCHAR(50) DEFAULT 'New',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Blogs Table
CREATE TABLE IF NOT EXISTS blogs (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT,
    featured_image VARCHAR(255),
    status VARCHAR(50) DEFAULT 'Published',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Settings Table
CREATE TABLE IF NOT EXISTS settings (
    key VARCHAR(100) PRIMARY KEY,
    value TEXT
);

-- Default Settings
INSERT INTO settings (key, value) VALUES ('company_phone', '+1 (555) 123-4567') ON CONFLICT DO NOTHING;
INSERT INTO settings (key, value) VALUES ('company_email', 'hello@evolveclothing.com') ON CONFLICT DO NOTHING;
INSERT INTO settings (key, value) VALUES ('company_address', '123 Manufacturing Way, NY 10001') ON CONFLICT DO NOTHING;
INSERT INTO settings (key, value) VALUES ('facebook_url', '#') ON CONFLICT DO NOTHING;
INSERT INTO settings (key, value) VALUES ('instagram_url', '#') ON CONFLICT DO NOTHING;
INSERT INTO settings (key, value) VALUES ('linkedin_url', '#') ON CONFLICT DO NOTHING;
