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






CREATE TABLE articles
(
    articleId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    articleTitle TEXT,
    articleContent TEXT,
    userId INT,
    FOREIGN KEY(userId) REFERENCES users(userId)
);






CREATE TABLE pictures
(
    pictureId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pictureTitle TEXT,
    pictureUrl TEXT,
    userId INT,
    FOREIGN KEY(userId) REFERENCES users(userId)
);






CREATE TABLE categories
(
    categoryId INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    categoryName TEXT
);

INSERT INTO categories(categoryName) VALUES ("Tech"),("Code"),("Video Games"),("Series"),("Science");




CREATE TABLE articles-categories
(
    articleId INT,
    FOREIGN KEY(articleId) REFERENCES articles(articleId),
    categoryId INT,
    FOREIGN KEY(categoryId) REFERENCES categories(categoryId),
    CONSTRAINT productcategory PRIMARY KEY(articleId, categoryId)
);