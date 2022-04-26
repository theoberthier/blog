CREATE DATABASE blog
    DEFAULT CHARACTER SET = 'utf8mb4';

USE blog;
CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    passwd VARCHAR(255) NOT NULL,
    pseudo VARCHAR(255) NOT NULL
);

CREATE TABLE article(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    content VARCHAR(1500) NOT NULL,
    addr VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    date_creation DATE NOT NULL,
    img_path VARCHAR(255) NOT NULL
);

CREATE TABLE commentaire(
    id INT PRIMARY KEY AUTO_INCREMENT,
    article_id INT NOT NULL,
    user_id INT NOT NULL,
    content VARCHAR(255) NOT NULL,
    date_creation DATE NOT NULL
);

CREATE TABLE like_article(
    id INT PRIMARY KEY AUTO_INCREMENT,
    article_id INT NOT NULL,
    user_id INT NOT NULL,
    date_like DATE NOT NULL
);

CREATE TABLE dis_like_article(
    id INT PRIMARY KEY AUTO_INCREMENT,
    article_id INT NOT NULL,
    user_id INT NOT NULL,
    date_like DATE NOT NULL
);