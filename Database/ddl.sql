CREATE DATABASE PHP_MVC;
USE PHP_MVC;

CREATE TABLE Funcionario (
    id int auto_increment NOT NULL,
    nome varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    cpf char(11) NOT NULL,
    primary key (id)
);

CREATE TABLE Pessoa (
    id int auto_increment NOT NULL,
    nome varchar(150) NOT NULL,
    email varchar(150) NOT NULL,
    endereco varchar(150) NOT NULL,
    telefone varchar(20) NOT NULL,
    cpf char(11) NOT NULL,
    rg varchar(20) NOT NULL,
    data_nascimento date NOT NULL,
    primary key (id)
);

CREATE TABLE Produto (
    id int auto_increment NOT NULL,
    nome varchar(150) NOT NULL,
    quantidade int NOT NULL,
    preco float NOT NULL,
    primary key (id)
);