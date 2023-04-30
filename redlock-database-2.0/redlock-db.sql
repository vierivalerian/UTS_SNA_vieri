CREATE DATABASE Redlock;

USE Redlock

CREATE TABLE users (
    UserID INT PRIMARY KEY,
    Nama VARCHAR(255),
    Alamat VARCHAR(255),
    Jabatan VARCHAR(255)
);

INSERT INTO users VALUES
(1, 'Vieri', 'Kos Ijo', 'Admin'),
(2, 'Venzy', 'Medan', 'Secretary'),
(3, 'Faiz', 'Salam', 'Mandor');