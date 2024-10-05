# PARA VER EL MAQUETADO DE LA ESTRUCTURA DE LA BASE DE DATOS IR A LA CARPETA " formato-db " #

# CREAR LA TABLA DE USUARIOS DEL MAQUETADO #

CREATE TABLE users (
    id          INT(255) AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    surname     VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(100) NOT NULL,
    date        DATE NOT NULL,

    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
) ENGINE=InnoDb;


/* podemos indicar el engine que nos permite mantener la integridad y que haya relaciones entre todas las tablas

tenemos 2 tipos de ingine

ENGINE=InnoDb nos permite soporte entre transacciones, tener claves ajenas, tener integridad referencial. hace que todas las claves primarias y el resto esten relacionados entre si. esto mejora el rendimiento.

ENGINE=MyISAM este nos permite tener una mayor velocidad para recuperar datos o hacer consultas select etc. es mejor que innodb en ese sentido. es recomendable para aplicaciones que usan muchos select. pero lo malo es que no mantiene la integridad.


*/


# CREAR LA TABLA DE CATEGORIAS #
CREATE TABLE category (
    id      INT(255) AUTO_INCREMENT NOT NULL,
    name    VARCHAR(100) NOT NULL,

    CONSTRAINT pk_category PRIMARY KEY(id)
) ENGINE=InnoDb;


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
)  ENGINE=InnoDb;

/*

- las PRIMARY KEY son aquellas que tienen un identificador unico que nos ayuda a hacer referencia a nuestra entidad y sus datos


- UNIQUE esto hace que nuestro dato va a ser unico y que si alguien ingresa un dato igual a ese no va a permitir registrarlo, por lo tanto va a requerir que sea distinto sin excepcion.

- las FOREING KEY van a ser los datos que van a venir de otra tabla, de esta forma nosotros podemos traer esos datos haciendo referencia desde que tabla va a venir cierto dato

- FOREING KEY() indicamos cual va a ser el campo que esta fuera de la tabla

- REFERENCES indica desde que tabla vendria

- tabla(dato) indicamos la tabla y el dato del que viene, para ser mas claros seria de esta forma el ejemplo

users(id)


*/





/* 

////// Cascade //////


- ON DELETE CASCADE // esto indica que cuando la categoria de la entrada se borre tambien se borre el registro con cual esta registrada


- ON UPDATE CASCADE // hace una modificacion completa en el campo junto con la tabla

- ON DELETE SET NULL/DEFAULT/NO ACTION // cuando borre la categoria podemos hacer que se ponga en null o tambien en default o no action que no haga nada


 */