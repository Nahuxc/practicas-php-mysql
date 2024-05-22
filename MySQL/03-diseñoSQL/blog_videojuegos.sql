# PARA VER EL MAQUETADO DE LA ESTRUCTURA DE LA BASE DE DATOS IR A LA CARPETA " formato-db " #

# CREAR LA TABLA DE USUARIOS DEL MAQUETADO #

CREATE TABLE users (
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    surname     VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(100) NOT NULL,
    date        DATE NOT NULL,

    CONSTRAINT pk_users PRIMARY KEY(id)
);


# CREAR LA TABLA DE CATEGORIAS #
CREATE TABLE category (
    id      INT(255) AUTO_INCREMENT NOT NULL,
    name    VARCHAR(100) NOT NULL,

    CONSTRAINT pk_category PRIMARY KEY(id)
);


# CREAR LA TABLA DE ENTRADAS #

CREATE TABLE inputs (
    id              INT(255) AUTO_INCREMENT NOT NULL,
    user_id         INT(255) NOT NULL,
    category_id     INT(255) NOT NULL,
    title           VARCHAR(255) NOT NULL,
    description     MEDIUMTEXT,
    date            DATE NOT NULL,

    CONSTRAINT pk_inputs PRIMARY KEY(id),

    CONSTRAINT fk_inputs_user FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_inputs_category FOREIGN KEY(category_id) REFERENCES category(id)
);

/*

- las PRIMARY KEY son aquellas que tienen un identificador unico que nos ayuda a hacer referencia a nuestra entidad y sus datos


- UNIQUE esto hace que nuestro dato va a ser unico y que si alguien ingresa un dato igual a ese no va a permitir registrarlo, por lo tanto va a requerir que sea distinto sin excepcion.

- las FOREING KEY van a ser los datos que van a venir de otra tabla, de esta forma nosotros podemos traer esos datos haciendo referencia desde que tabla va a venir cierto dato

- FOREING KEY() indicamos cual va a ser el campo que esta fuera de la tabla

- REFERENCES indica desde que tabla vendria

- tabla(dato) indicamos la tabla y el dato del que viene, para ser mas claros seria de esta forma el ejemplo

users(id)


*/

