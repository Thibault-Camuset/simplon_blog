DROP DATABASE IF EXISTS simplon_blog;

CREATE DATABASE simplon_blog;



CREATE TABLE roles
(
    roleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    roleName TINYTEXT
);

INSERT INTO roles(roleName) VALUES ("Admin"),("Rédacteur"),("Utilisateur");




CREATE TABLE users
(
    userId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    userName TEXT,
    userEmail TEXT,
    userPassword VARCHAR(64),
    userFirstName TEXT,
    userLastName TEXT,
    createdAt DATE,
    roleId INT,
    FOREIGN KEY(roleId) REFERENCES roles(roleId)
);

INSERT INTO users(userName, userEmail, userPassword, userFirstName, userLastName, createdAt, roleId) VALUES ('Toto', 'toto@gmail.com', 'cd10d7a0e698d034304d2f118025468a4a4e8b725528d18ab3132f04d41584f8', 'Toto', 'Le Grand', '2020-11-18', 1);