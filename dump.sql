
CREATE TABLE roles
(
    roleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    roleName TINYTEXT
);

INSERT INTO roles(roleName) VALUES ("Admin"),("Rédacteur"),("Utilisateur");






CREATE TABLE users
(
    userName VARCHAR(60) PRIMARY KEY NOT NULL,
    userEmail TEXT,
    userPassword VARCHAR(60),
    userFirstName TEXT,
    userLastName TEXT,
    createdAt DATE,
    roleId INT,
    FOREIGN KEY(roleId) REFERENCES roles(roleId)
);

INSERT INTO users(userName, userEmail, userPassword, userFirstName, userLastName, createdAt, roleId) VALUES ('Toto', 'toto@gmail.com', '$2y$10$l8I.iuxEu7vLZ0rZyhvfHerV/kkG6IhHIzcD7m/KPZKSpZalV7GwW', 'Toto', 'Le Grand', '2020-11-12', 1);






CREATE TABLE categories
(
    categoryName VARCHAR(60) PRIMARY KEY NOT NULL
);

INSERT INTO categories(categoryName) VALUES ("Tech"),("Code"),("Games"),("Series"),("Science");









CREATE TABLE articles
(
    articleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    articleTitle TEXT,
    articleContent TEXT,
    userName VARCHAR(60),
    FOREIGN KEY(userName) REFERENCES users(userName),
    categoryName VARCHAR(60),
    FOREIGN KEY(categoryName) REFERENCES categories(categoryName)
);






CREATE TABLE pictures
(
    pictureId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pictureTitle TEXT,
    pictureUrl TEXT,
    userName VARCHAR(60),
    FOREIGN KEY(userName) REFERENCES users(userName)
);
