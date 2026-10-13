CREATE DATABASE gym_management;

USE gym_management;

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO admin (username, password)
VALUES ('admin', 'admin123');

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    gender VARCHAR(20),
    age INT,
    plan VARCHAR(50),
    joining_date DATE
);

INSERT INTO members
(name, email, phone, gender, age, plan, joining_date)
VALUES
('Arun Kumar',
 'arun@gmail.com',
 '9876543210',
 'Male',
 22,
 'Basic',
 '2026-09-01');

INSERT INTO members
(name, email, phone, gender, age, plan, joining_date)
VALUES
('Priya S',
 'priya@gmail.com',
 '9876543211',
 'Female',
 21,
 'Standard',
 '2026-09-05');