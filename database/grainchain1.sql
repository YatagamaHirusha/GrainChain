CREATE DATABASE GrainChain;
USE GrainChain;

CREATE TABLE contact_messages (
    message_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
	submitted_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 	/* this returns current date */
);

	select * from contact_messages;

CREATE TABLE farmer_details (
	farmer_id VARCHAR(13) PRIMARY KEY,
    full_name VARCHAR(100),
    nic VARCHAR(13),
    birth_date DATE,
    gender ENUM('Male','Female'),
    contact_number VARCHAR(15) not null,
    home_number VARCHAR(15),
    address TEXT,
    id_proof MEDIUMBLOB
    );

CREATE TABLE land_details (
	land_id INT AUTO_INCREMENT PRIMARY KEY,
    farmer_id VARCHAR(13),
    province VARCHAR(100),
    district VARCHAR(100),
    ownership ENUM('Owned', 'Rented', 'Government Lease'),
    land_area DECIMAL(10,2),
    irrigation_type ENUM('Rain-fed', 'Canal', 'Well', 'Other'),
    FOREIGN KEY (farmer_id) REFERENCES farmer_details(farmer_id) ON DELETE CASCADE
    );

CREATE TABLE Users(
	user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100),
    role ENUM('Farmer','Admin','Agent'),
    farmer_id varchar(13),
    FOREIGN KEY (farmer_id) REFERENCES farmer_details(farmer_id) ON DELETE CASCADE
    );
	
