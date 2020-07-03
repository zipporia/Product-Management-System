CREATE DATABASE loginsystem

CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_uid TINYTEXT NOT NULL,
    user_email TINYTEXT NOT NULL,
    user_pwd LONGTEXT NOT NULL
);