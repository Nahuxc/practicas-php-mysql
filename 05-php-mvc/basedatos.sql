CREATE DATABASE practice_notes;

use practice_notes;

CREATE TABLE users(
    id          int(255) auto_increment not null,
    name        VARCHAR(100) not null,
    username    VARCHAR(100) not null,
    email       VARCHAR(255) not null,
    password    VARCHAR(255) not NULL,
    date        DATE not null,

    CONSTRAINT pk_users PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)

)ENGINE=InnoDb;



CREATE TABLE notes(

    id          INT(255) auto_increment not null,
    user_id     INT(100) not null,
    title       VARCHAR(255) not null,
    content     VARCHAR(255) not null,
    date        DATE not null,

    CONSTRAINT pk_notes PRIMARY KEY(id),
    CONSTRAINT fk_notes_user FOREIGN KEY (user_id) REFERENCES notes (id)

)ENGINE=InnoDb;