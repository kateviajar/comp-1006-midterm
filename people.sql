-- This is a SQL comment
-- Create our Lesson 03 DB (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS comp_1006_midterm;
USE comp_1006_midterm;

-- Create the countries table
CREATE TABLE IF NOT EXISTS people (
    id INT(11) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    age int(3) NOT NULL,
    bio VARCHAR(4000) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);