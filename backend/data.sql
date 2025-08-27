CREATE DATABASE admin_panel;

USE admin_panel;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert a sample admin with hashed password
INSERT INTO admins (username, password) 
VALUES ('admin', '$2y$10$V3Uj2pG4ZPzNeJHK6jE.vO6FpxvF8ip4HnzQlUwD3D8QvXqDpLhkG'); 
-- password: admin123
