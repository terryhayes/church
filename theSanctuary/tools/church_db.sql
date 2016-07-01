CREATE DATABASE church;
USE church;

CREATE TABLE admin
(
    admin_id INT(5) AUTO_INCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    pass_recovery VARCHAR(15) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(45) NOT NULL,
    status VARCHAR(10) NOT NULL,
    is_delete INT(1) NOT NULL,
    is_active INT(1) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    PRIMARY KEY(admin_id)
);

CREATE TABLE spotlight
(
    spot_id INT(5) AUTO_INCREMENT NOT NULL,
    title VARCHAR(30) NOT NULL,
    image VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    is_active INT(1) NOT NULL,
    is_delete INT(1) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    PRIMARY KEY(spot_id)
);

CREATE TABLE album
(
    album_id INT(5) AUTO_INCREMENT NOT NULL,
    title VARCHAR(20) NOT NULL,
    description VARCHAR(80) NOT NULL,
    is_delete INT(1) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    PRIMARY KEY(album_id)
);

CREATE TABLE gallery
(
    gallery_id INT(5) AUTO_INCREMENT NOT NULL,
    image VARCHAR(50) NOT NULL,
    album_id VARCHAR(5)  NULL,
    is_delete INT(1) NOT NULL,
    is_active INT(1) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    PRIMARY KEY(gallery_id)
);

CREATE TABLE program
(
    prog_id INT(5) AUTO_INCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    leader VARCHAR(70) NOT NULL,
    description VARCHAR(400) NOT NULL,
    location VARCHAR(50) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    date_of_event VARCHAR(30) NOT NULL,
    time_of_event VARCHAR(30) NOT NULL,
    is_delete INT(1) NOT NULL,
    PRIMARY KEY(prog_id)
); 
CREATE TABLE message
(
    msg_id INT(5) AUTO_INCREMENT NOT NULL,
    sender VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    message VARCHAR(400) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    is_delete INT(1) NOT NULL,
    PRIMARY KEY(msg_id)
); 
CREATE TABLE prayer
(
    pry_id INT(5) AUTO_INCREMENT NOT NULL,
    sender VARCHAR(50) NOT NULL,
    email VARCHAR(70) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    title VARCHAR(100) NOT NULL,
    message VARCHAR(400) NOT NULL,
    created_on VARCHAR(30) NOT NULL,
    is_delete INT(1) NOT NULL,
    PRIMARY KEY(pry_id)
); 

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `pass_recovery`, `phone`, `email`, `status`, `is_delete`, `is_active`, `created_on`) VALUES
(1, 'JESUS CHRIST', 'admin_Jesus', 'chojYUlfh3SyM', 'Jesus_is_Lord', '1000000000', 'christ@heaven.com', '1', 0, 1, '2016-05-30 16:42:37');
