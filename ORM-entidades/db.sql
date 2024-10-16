CREATE DATABASE orm_db;

USE orm_db;

CREATE TABLE clients(
    id      INT(20) auto_increment not null,
    name    VARCHAR(200) not null,
    surname VARCHAR(200) not null,
    city    VARCHAR(255) not null,

    CONSTRAINT pk_clients PRIMARY KEY(id)
)ENGINE=Innodb;

CREATE TABLE users(
    id          INT(20) auto_increment not null,
    name        VARCHAR(200) not null,
    surname     VARCHAR(200) not null,
    password    VARCHAR(255) not null,

    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=Innodb;