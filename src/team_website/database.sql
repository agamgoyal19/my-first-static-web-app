-- Create a database for CommunityConnect
CREATE DATABASE IF NOT EXISTS CommunityConnectDB;
USE CommunityConnectDB;

-- Table for volunteer opportunities
CREATE TABLE IF NOT EXISTS Opportunities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT
);

-- Sample data for opportunities
INSERT INTO Opportunities (title, description) VALUES 
('Volunteer at Local Shelter', 'Help feed and care for shelter animals.'),
('Community Cleanup Event', 'Join us in cleaning up local parks and streets.');
-- Add more opportunities as needed
