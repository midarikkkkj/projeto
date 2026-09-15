CREATE DATABASE IF NOT EXISTS biblioteca;
USE biblioteca;

CREATE TABLE IF NOT EXISTS categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT ,
    nome VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS livro (
    id_livro INT PRIMARY KEY AUTO_INCREMENT ,
    titulo VARCHAR(255) NOT NULL,
    ano_pub VARCHAR(4),
    autor(255),
    resumo TEXT,
    capa VARCHAR(255),
    id_categoria INT
    FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria)
);

CREATE TABLE IF NOT EXISTS usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    foto VARCHAR(255)
);

--seed
INSERT INTO categoria (nome) VALUES ("romance"), ("terror"), ('fantasia');

INSERT INTO livro(titulo, ano_pub, autor, resumo, id_categoria)
VALUES ("orgulho e preconteiro", "1813", "jane austin", "lorem ipsum", 1), 
("orgulho e preconteiro", "1813", "jane austin", "lorem ipsum", 2), ("orgulho e preconteiro", "1813", "jane austin", "lorem ipsum", 3)
.